<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        ///Query Builder

        //fetch all Data
        //$users = DB::table('users')->get();

        //fetch Single Data
        // $users = DB::table('users')->where('id',1)->first();

        //Select Culomn
        //$users = DB::table('blogs')->select('title')->get();

        //Colletion
        //$users = DB::table('blogs')->pluck('title');
        // $users = DB::table('blogs')->pluck('title','id')->toArray();

        //get all product
        //$products = DB::table('products')->get();

        //Count Product
        //$products = DB::table('products')->count();

        //get max/min price
        //$products = DB::table('products')->min('price');

        //sum/avg price
        // $products = DB::table('products')->avg('price');

        /// Eloquent
        //Insert Data
        // $user = new User();
        // $user->name = "Jama";
        // $user->email = "jama@gmail.com";
        // $user->password = "123456";
        // $user->save();
        // return view('home');

        //Read ALL Data
        //$users = User::all();

        //Read Single Data
        //$user = User::where('id',1)->first();
        //$user = User::find(1);

        //Update Data
        // $user = User::where('id',1)->first();
        // $user = User::find(1);
        // $user->email = 'hello@gimail.com';
        // $user->password = '123';
        // $user->save();

        //Delete Data
        // $user = User::find(1);
        $user = User::findOrFail(1);
        // $user->delete();


        // dd($user);
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
    function update(){
        DB::table('users')->where('id',1)->update(
            [
                'name'=>'Jam002',
            ]
        );
    }
    function delete()
    {
        DB::table('users')->where('id',1)->delete();
    }
    function showAboutPage()
    {
        return view('about');
    }
}

