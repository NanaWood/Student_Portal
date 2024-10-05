<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function  logs(){
        return view('Frontend.login');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->regenerate();

           
            return redirect()->intended('/DashBoard' );
            // return redirect('/DashBoard');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
    public function logout(Request $request)
    {
        Auth::logout();



        return redirect('/login');
    }

    
    
}
