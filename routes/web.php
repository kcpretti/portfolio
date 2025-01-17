<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/about', function (){
  return view('about');

});

Route::get('/product', function(){
  return view('product', ['name'=> 'shoes']);
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('/user/{name?}', function ($name = 'Guest'){
    return 'User' . $name;

});
