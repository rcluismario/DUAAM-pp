<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validator($request);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->intended(route('admin.dashboard'))->with('status', 'You are logged in');
        }

        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('status', 'You have logged out');
    }

    public function validator(Request $request)
    {
        $rules = [
            'email' => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255'
        ];

        $messages = [
            'email.exists' => 'These credentials do not match our records'
        ];

        $request->validate($rules, $messages);
    }

    public function loginFailed()
    {
        return redirect()->back()->withInput()->with('error', 'Login failed, please try again.');
    }
}
