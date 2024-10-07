<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function logs()
    {
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

            // Fetch current user and get the username
            $username = Auth::user()->username;

            // Pass the variable into the view to display username
            return view('Frontend.dashboard', ['username' => $username]);
        }

        // Authentication failed
        return back()
            ->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])
            ->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}
