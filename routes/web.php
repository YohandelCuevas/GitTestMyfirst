<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Call the controller that set the view
Route::get('/','PagesController@home');
Route::get('/contacts','PagesController@contacts');
Route::get('/about','PagesController@about');

/*Differents ways to send data to a view:

    Route::get('/', function () {

        $tasks = [

            'Go to the store',
            'Go to the supermarket',
            'Go to work'

        ];

        return view('welcome',[

            'tasks' => $tasks,
            'foo' => 'foobar'

        ]);
    });

    
        
            2-return view('welcome')->withtasks($tasks)->withfoo('foobar');

            3-return view('welcome')->withtasks([
            'Go to the store',
            'Go to the supermarket',
            'Go to work'
            ]);

            4-return view('welcome')->with([
            'foo' => 'bar',
            'tasks'=> ['some tasks']
        ]);
        */

    
    
    
  

