<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
    {
        return view('welcome', [
            'title' => '(@_@)',
            'posts' => [
                'Hi man I am the best one',
                'And you are too the best :D',
                'Paul I Atreides form Arrakis',
                'Harkonnens are Rich bitches',
            ]
        ]);
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
