<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('index');
    }

    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
