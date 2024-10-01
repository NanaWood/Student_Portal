<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function new(){

        
        return view('Frontend.dashboard');
    }

}
