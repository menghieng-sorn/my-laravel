<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        // Post::insert([
        //     [
        //         'user_id'=> 1,
        //         'name'=>'Learn Laravel'
        //     ],
        //     [
        //         'user_id'=> 1,
        //         'name'=>'Learn Java'
        //     ],
        //     [
        //         'user_id'=> 2,
        //         'name'=>'Learn PHP'
        //     ]
        // ]);
        $posts = Post::all();
        $users = User::all();
        return view('post',compact('posts','users'));

    }
}
