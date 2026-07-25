<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        //fetch all Data
        //$users = DB::table('users')->get();

        //fetch Single Data
        $users = DB::table('users')->where('id',1)->first();

        dd($users);
        return view('home');
    }
    function store()
    {
        DB::table('users')->insert(
            [
                'name'=>'Jam001',
                'email'=>'jam001@gmail.com',
                'password'=>'123456'
            ]
        );
        return view('home');
    }
    function showAboutPage()
    {
        return view('about');
    }
}
