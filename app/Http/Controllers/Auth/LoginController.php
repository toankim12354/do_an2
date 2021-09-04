<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct() 
    {
        $this->middleware('guest:giao_vu')->except('logout');
    }
    public function showLogin() 
    {
        return view('auth.login');
    }

    public function login(Request $request) 
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $remember = $request->has('remember') ? true : false;
        // dd($validated);

        if (Auth::guard('giao_vu')->attempt($validated, $remember)) {
           return redirect()->route('home');
        }

        return redirect()->back()
                         ->with('error', 'tai khoan hoac mat khau khong chinh xac');

    }

    public function logout() 
    {
        Auth::guard('giao_vu')->logout();
        return redirect()->route('login.form');
    }
}
