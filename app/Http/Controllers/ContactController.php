<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        return view('contact');
    }
    function store(ContactRequest $request){
        //dd($request->all());
        // echo $request->input('name');
        // echo "</br>";
        // echo $request->email;

        // $request->validate([
        //     'name'=> 'required|min:2|max:20',
        //     'email'=> 'required|email'
        // ]);

        //Custom Validation

        // $request->validate(
        //     [
        //         'name' => ['required','min:2','max:20'],
        //         'email' => 'required|email'
        //     ],
        //     [
        //         'name.required' => 'Hey please fill the name field',
        //         'email.required'=> 'Hey please fill the email',
        //         'name.max' => 'The max length of name have to 20 character',
        //         'name.min' => 'The min length of name have to 2 character'
        //     ]
        // );
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        dd('Saved');

    }
}
