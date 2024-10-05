<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('Frontend.register');
    }

    public function  store (Request $request){
        $request->validate([
            
            'username' => 'required',
            'Sudent_ID'=>'required',
            'email' => 'required',
            'password' => 'required',
            ]);

        $user = User::create([
            "username" => $request->username,
            "Sudent_ID"=>$request->Sudent_ID,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        $username = $user['username'];
        return view('Frontend.dashboard', ['username' => $username]);
        
    }
}
