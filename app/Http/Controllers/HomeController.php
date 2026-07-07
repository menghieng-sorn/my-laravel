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
        //read user
        //$users = User::all();

        //Create User
        // $user = new User();
        // $user->name = 'admin';
        // $user->email = 'admin@gmail.com';
        // $user->password = '123';
        // $user->save();

        // Create Product
        // $product = new Product();
        // $product->name = 'Car';
        // $product->description = 'this is car descripton';
        // $product->price = 100;

        // $product->save();


        //Product Data
        // $products = DB::table('products')->avg('price');
        // dd($products);

        // Create Data

        // DB::table('users')->insert(
        //     [
        //         [
        //             'name' => 'John Doe',
        //             'email' => 'johndoe@example.com',
        //             'password' => '123456'
        //         ],
        //         [
        //             'name' => 'Jame',
        //             'email' => 'jame@example.com',
        //             'password' => '123456'
        //         ],
        //     ],
        // );

        // Get Data ALL
        //$users = DB::table('users')->get();

        //Get One Data
        //$users = DB::table('users')->where('id','>',8)->get();
        //return $users;

        //Update Data
        // DB::table('users')->where('id',8)->update([
        //     'name'=>"test user",
        //     'email'=>"test@gmail.com",
        //     'password'=> "123"
        // ]);

        //Delete Data
        //$products = Product::withTrashed()->find(30)->forceDelete();


        return view('home');
    }
    function showAboutPage()
    {
        return view('about');
    }
}
