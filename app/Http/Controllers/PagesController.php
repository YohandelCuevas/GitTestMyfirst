<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
            $tasks = [

        'Go to the store',
        'Go to the supermarket',
        'Go to work'

    ];

    return view('welcome',[

                'tasks' => $tasks,
                'foo' => 'foobar'
        
            ]);
    }

    public function contacts(){

        return view('contacts');
    }

    public function about(){
        
         return view('about');
    }
}
