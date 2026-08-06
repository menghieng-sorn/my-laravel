<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\State;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller
{
    // public static function middleware(){
    //     return [new Middleware(CheckRoleMiddleware::class,except:['index'])
    //     ];
    // }
    // public static function middleware(){
    //     return [new Middleware(CheckRoleMiddleware::class,only:['handlePost'])
    //     ];
    // }

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
        // Tag::insert([
        //     [
        //         'name'=>'Laravel'
        //     ],
        //     [
        //         'name'=>'Java'
        //     ],
        //     [
        //         'name'=>'PHP'
        //     ]
        // ]);

        $posts = Post::all();
        $users = User::all();

        // $posts = Post::first();
        // $tag = Tag::first();
        // $posts->tags()->attach($tag);
        // $posts->tags()->attach([2,3]);
        // $posts->tags()->detach([2]);

        // $posts->tags()->sync([2,3]);

        return view('post',compact('posts','users'));

    }
    function indexTag(){
        $tags = Tag::all();
        return view('tag', compact('tags'));
    }
    function indexLocation(){

        // $country = new Country([
        //     'name'=>'United State'
        // ]);
        // $country->save();
        // $state = new State([
        //     'name'=>'Califonia'
        // ]);
        // $country->states()->save($state);

        // $state->cities()->createMany([
        //     ['name'=>'Los Angeles'],
        //     ['name'=>'San Francisco'],
        // ]);

        $country = Country::first();
         return view('location', compact('country'));
    }
    function indexImage(){

        // $user = User::find(1);
        // $user->image()->create([
        //     'path'=>'/uploads/user_one.jpg'
        // ]);

        // $post = Post::find(1);
        // $post->image()->create([
        //     'path'=>'/uploads/post_one.jpg'
        // ]);

        $post = Post::find(1);
        return $post->image;
    }

    function getPost(){
        return view('post.index');
    }
    function handlePost(Request $request){
        dd($request->all());
    }
}
