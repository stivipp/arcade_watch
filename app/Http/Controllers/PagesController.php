<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
    {
         // return User::first()->posts; 

         return view('welcome', [
            'posts' => Post::latest()->get(),
     ]); 

       // return \DB::table('posts')->get();

       // return Post::all();
       // return Post::first();
       // return Post::all()->first();
       // return Post::all()->last();
       // return Post::all()->pluck('title');
    }

    
    public function about() 
    {
        return view('about');
    }

    
    public function contact() 
    {
        return view('contact');
    }
}
