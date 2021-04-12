<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeDonationRequest;
use App\Models\Donation;
use App\Models\Tree;
use App\Models\User;
use App\Resolvers\PaymentPlatformResolver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DonationController extends Controller
{
    protected $paymentPlatformResolver;

    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
        $this->middleware('auth:admin')->except(['store', 'approval', 'cancelled']);
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }

    public function index(Request $request)
    {

        $unpaid_donations = Donation::where('status', '=', 'pending')->get();
        foreach ($unpaid_donations as $d) {
            $d->delete();
        }

        $donations = Donation::orderBy('created_at', 'desc')->paginate(25);

        if ($request->has('search')) {
            $donations = Donation::where('folio', '=', $request->search)->paginate(10);
        }

        return view('admin.donations.index', [
            'donations' => $donations
        ]);
    }

    public function show($id)
    {
        $donation = Donation::with(['user', 'trees'])->findOrFail($id);

        return view('admin.donations.show', [
            'donation' => $donation
        ]);
    }

    public function store(MakeDonationRequest $request)
    {
        if (!env('ACCEPT_DONATIONS')) {
            return redirect()->route('home')->withErrors('Donaciones deshabilitadas. Intente');
        }
        if (!env('ACCEPT_PAYPAL') && $request->payment_platform == 'paypal') {
            return redirect()->route('home')->withErrors('Forma de pago PayPal deshabilitado. Intente con otra forma de pago.');
        }
        if (!env('ACCEPT_STRIPE') && $request->payment_platform == 'stripe') {
            return redirect()->route('home')->withErrors('Forma de pago Stripe deshabilitado. Intente con otra forma de pago.');
        }

        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'password' => Hash::make('password')
            ]);
        }

        if ($request->donation_type == 'simple_don') {
            $request->validate([
                'trees_num' => ['required', 'numeric', 'min:1', 'max:50'],
            ]);
            $total = $request->trees_num * env('TREE_COST');
        } elseif ($request->donation_type == 'photo_don') {
            $request->validate([
                'trees_num' => ['required', 'numeric', 'min:1', 'max:50'],
                'trees' => ['required', 'array'],
            ]);
            foreach ($request->trees as $tree) {
                if (!$tree) {
                    return redirect()->route('donate')->withErrors('Debe ponerle nombre a todos los árboles');
                }
                if (strlen($tree) > 24) {
                    return redirect()->route('donate')->withErrors('Los nombres de árboles deben de ser menores a 24 caracteres');
                }
            }
            $total = $request->trees_num * env('PHOTO_TREE_COST');
        } else {
            $request->validate([
                'donation_total' => ['required', 'numeric', 'min:20', 'max:100000']
            ]);
            $total = $request->donation_total;
        }

        $donation = Donation::create([
            'user_id' => $user->id,
            'total' => $total,
            'status' => 'pending'
        ]);

        session()->put('paymentPlatformId', $request->payment_platform);
        session()->put('donation_id', $donation->id);

        if ($request->donation_type != 'org_don') {
            if ($request->donation_type == 'simple_don') {
                for ($i = 0; $i < $request->trees_num; $i++) {
                    Tree::create([
                        'donation_id' => $donation->id,
                        'name' => '',
                        'needs_image' => false
                    ]);
                }
            } else {
                foreach ($request->trees as $tree) {
                    Tree::create([
                        'donation_id' => $donation->id,
                        'name' => $tree,
                        'needs_image' => true
                    ]);
                }
            }
        }

        if ($request->payment_method) {
            return $paymentPlatform->handlePayment($total, $request->payment_method);
        } else {
            return $paymentPlatform->handlePayment($total);
        }
    }

    public function approval()
    {
        if (session()->has('paymentPlatformId')) {
            $paymentPlatform = $this->paymentPlatformResolver->resolveService(session()->get('paymentPlatformId'));

            return $paymentPlatform->handleApproval();
        }

        return redirect()->route('donate')->withErrors('No pudimos obtener tu plataforma de pago. Intente de nuevo.');
    }

    public function cancelled()
    {
        if (session()->has('donation_id')) {
            $donation = Donation::where('id', session()->get('donation_id'))->first();
            $donation->delete();
        }
        return redirect()->route('donate')->withErrors('Has cancelado tu donación');
    }
}
