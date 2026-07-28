<?php

namespace App\Http\Controllers;

use App\Models\Product;
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


        //Read ALL Data
        //$users = User::all();

        //$users = User::all();

        //Read Single Data
        //$user = User::find(2);

        //Update Data
        // $user = User::find(2);
        // $user->name = 'User1';
        // $user->save();

        //Delete Data
        // $user = User::find(5);
        // $user->delete();

        //$fillable

        //Insert only sigle Data
        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@gmail.com',
        //     'password' => '123'
        // ]);
        // //Insert Multi Data
        // User::insert(
        //     [
        //         'name' => 'Test User 2',
        //         'email' => 'test2@gmail.com',
        //         'password' => '123'
        //     ],
        //     [
        //         'name' => 'Test User 3',
        //         'email' => 'test3@gmail.com',
        //         'password' => '123'
        //     ]
        // );


        //Conditional Clause

        //$product = Product::where('id','>',2)->get();
        //$product = Product::where('id','<',2)->first();
        //$product = Product::where('id','>',2)->where('price','>','300')->get();

        // $product = Product::where([
        //     'id' => 1,
        //     'price'=>300
        // ])->get();

        //$product = Product::where('name','LIKE','%maxime%')->get();
        // $product = Product::where('name','NOT LIKE','%maxime%')->get();
        //$product = Product::where('name','LIKE','%maxime%')->orWhere('description','LIKE','Debitis')->get();

        //$product = Product::whereIn('id',[1,3,4,6,20])->get();
        $product = Product::whereBetween('price',[100,300])->get();

        dd($product);

        return view('home');
    }
    function store()
    {
        DB::table('users')->insert(
            [
                'name' => 'Jam001',
                'email' => 'jam001@gmail.com',
                'password' => '123456'
            ],
        );
        return view('home');
    }
    function update()
    {
        DB::table('users')->where('id', 1)->update(
            [
                'name' => 'Jam002',
            ]
        );
    }
    function delete()
    {
        DB::table('users')->where('id', 1)->delete();
    }
    function showAboutPage()
    {
        return view('about');
    }
}
