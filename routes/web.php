<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    //return 'About page';
    return View('about');
});

Route::get('/post', function () {
    //return 'Post Page';
    return View('post');
});

Route::get('/profile', function () {
    //return 'Profile Page';
    return View('profile');
});

Route::get('/contact', function () {
    //return 'Contact Page';
    return View('contact');
});

Route::View('link','/link');
    
