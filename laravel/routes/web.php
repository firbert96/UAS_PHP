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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/flapy',function(){
return view ('flapy'); //case sensitive yg hello ny 
});

Route::get('/snake',function(){
return view ('snake'); //case sensitive yg hello ny 
});

Route::get('/chess',function(){
return view ('chess'); //case sensitive yg hello ny 
});
Route::get('/game',function(){
return view ('game'); //case sensitive yg hello ny 
});
Route::get('/info',function(){
return view ('info'); //case sensitive yg hello ny 
});

Route::get('/forum',function(){
return view ('forum'); //case sensitive yg hello ny 
});

Route::get('/reversi',function(){
return view ('reversi'); //case sensitive yg hello ny 
});

Route::get('/typing',function(){
return view ('typing'); //case sensitive yg hello ny 
});

Route::get('/solitaire',function(){
return view ('solitaire'); //case sensitive yg hello ny 
});

