<?php

namespace App\Http\Controllers\Admin;
use App\Models\Counter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCounterRequest;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;


class CounterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $counters = Counter::all();

        return view('admin.counter.index',['counters' => $counters]);
    }

    public function store(CreateCounterRequest $request){
        $counters = Counter::create([
            'act' => $request->act,
            'cont' => $request->cont
        ]);
        return redirect()->back();
    }

    
   public function edit($id){
        $counters = Counter::findOrFail($id);
        return view("admin.counter.update", ["counters" => $counters]);   
    }

    public function update(CreateCounterRequest $request){
        $counters = Counter::findOrFail($request->counter_id);
        $counters->act = $request->act;
        $counters->cont=$request->cont;
        $counters->save();
        return redirect()->route('admin.counter.index');
    }

    public function delete(Request $request){
        $counters = Counter::findOrFail($request->counter_id);

        $counters->delete();
        return redirect()->back();
    }
}