<?php

namespace App\Services;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Mail\DonationCompleted;
use Illuminate\Support\Facades\Mail;
use App\Traits\ConsumeExternalServices;

class StripeService
{
    use ConsumeExternalServices;

    protected $baseUri;
    protected $key;
    protected $secret;

    public function __construct()
    {
        $this->baseUri = config('services.stripe.base_uri');
        $this->key = config('services.stripe.key');
        $this->secret = config('services.stripe.secret');
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        return "Bearer {$this->secret}";
    }

    public function handlePayment($total, $paymentMethod)
    {
        $intent = $this->createIntent($total, 'MXN', $paymentMethod);

        session()->put('paymentIntentId', $intent->id);

        return redirect()->route('approval');
    }

    public function handleApproval()
    {
        if (session()->has('paymentIntentId')) {
            $paymentIntentId = session()->get('paymentIntentId');

            $confirmation = $this->confirmPayment($paymentIntentId);

            if ($confirmation->status == 'requires_action') {
                $clientSecret = $confirmation->client_secret;
                return view('stripe.3d-secure')->with([
                    'clientSecret' => $clientSecret
                ]);
            }

            if ($confirmation->status == 'succeeded') {
                $name = $confirmation->charges->data[0]->billing_details->name;
                $currency = strtoupper($confirmation->currency);
                $amount = $confirmation->amount / $this->resolveFactor($currency);

                if (session()->has('donation_id')) {
                    $donation = Donation::where('id', session()->get('donation_id'))->first();
                    $donation->status = 'paid';
                    $donation->save();

                    Mail::to($donation->user->email)->send(new DonationCompleted($donation->folio, $donation->total));
                }

                return redirect()->route('thankyou');
            }
        } else {
            if (session()->has('donation_id')) {
                $donation = Donation::where('id', session()->get('donation_id'))->first();
                $donation->delete();
            }
            return redirect()->route('donate')->withErrors('No se pudo capturar su pago, intente de nuevo.');
        }
    }

    public function createIntent($value, $currency, $paymentMethod)
    {
        return $this->makeRequest(
            'POST',
            '/v1/payment_intents',
            [],
            [
                'amount' => round($value * $this->resolveFactor($currency)),
                'currency' => strtolower($currency),
                'payment_method' => $paymentMethod,
                'confirmation_method' => 'manual'
            ]
        );
    }

    public function confirmPayment($paymentIntentId)
    {
        return $this->makeRequest(
            'POST',
            "/v1/payment_intents/{$paymentIntentId}/confirm",
        );
    }

    public function resolveFactor($currency)
    {
        $zeroDecimalCurrencies = ['JPY'];

        if (in_array(strtoupper($currency), $zeroDecimalCurrencies)) {
            return 1;
        }
        return 100;
    }
}
