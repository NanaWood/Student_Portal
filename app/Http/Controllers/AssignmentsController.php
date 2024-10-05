<?php

namespace App\Http\Controllers;

use App\Models\Assignments;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function create(){
        return view('Frontend.assignments');
    }

    public function  store (Request $request){
        $request->validate([
            
            'Topic' => 'required',
            'Description'=>'required',
            'Submition' => 'required',
            'Score' => 'required',
            ]);

        Assignments::create([
            "Topic" => $request->topic,
            "Description"=>$request->description,
            "Submition" => $request->submition,
            "Score" => $request->score,
        ]);
           
            //dd($user);
             //Auth::login($user);
        //return redirect('/login');
        

        
    }
}
