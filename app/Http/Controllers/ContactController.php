<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        return view('contact');
    }
    function store(Request $request){
        //dd($request->all());
        // echo $request->input('name');
        // echo "</br>";
        // echo $request->email;

        $request->validate([
            'name'=> 'required|min:2|max:20',
            'email'=> 'required|email'
        ]);
        dd($request->all());
    }
}
