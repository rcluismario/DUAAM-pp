<?php

namespace App\Http\Controllers;
use App\Models\Counter;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;
use App\Models\Tree;
use Illuminate\Http\Request;

class WebController extends Controller
{   
    public function counter(){
        $counters = Counter::all();

        return view('counter',['counters' => $counters]);
    }

    public function home()
    {
        return view('home');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function our_team()
    {
        return view('our_team');
    }

    public function sustainability()
    {
        return view('sustainability');
    }

    public function transparency()
    {
        return view('transparency');
    }

    public function thankyou()
    {
        if (session()->has('donation_id')) {
            $donation = Donation::where('id', '=', session()->get('donation_id'))->first();
            if ($donation) {
                return view('thank-you');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('home');
        }
    }

    public function your_tree(Request $request)
    {
        $trees = null;

        if ($request->has('folio') && $request->get('folio') != '') {
            $folio = $request->get('folio');
            if ($folio[0] == 'T') {
                $trees = Tree::where('folio', $folio)->get();
            } elseif ($folio[0] == 'D') {
                $donation = Donation::with(['trees'])->where('folio', $folio)->first();
                if ($donation) {
                    $trees = $donation->trees->where('needs_image', true);
                } else {
                    $trees = collect([]);
                }
            } else {
                $trees = null;
            }
        }

        return view('your_tree', [
            'trees' => $trees
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function donate()
    {
        if (env('ACCEPT_DONATIONS') && (env('ACCEPT_STRIPE') || env('ACCEPT_PAYPAL'))) {
            return view('donate', [
                'accept_stripe' => env('ACCEPT_STRIPE'),
                'accept_paypal' => env('ACCEPT_PAYPAL')
            ]);
        }
    }
}
