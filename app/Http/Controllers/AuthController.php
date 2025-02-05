<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            notify()->success('Welcome ' . Auth::user()->name, 'Success');
            return redirect()->intended(route('admin.dashboard'));
        }
    
        notify()->error('Invalid email or password.', 'Error');
        return back();
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        notify()->success('Thankyou Admin', 'Success');
        return redirect('/');
    }
}
