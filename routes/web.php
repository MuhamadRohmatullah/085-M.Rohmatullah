<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage.landingpage');
});

Route::get('/register', function(){
    return view('user.register');
});

Route::get('/home', function(){
    return view('user.home');
});

Route::get('/mypost', function(){
    return view('user.posts');
});

Route::get('/myprofile', function(){
    return view('user.myprofile');
});

Route::get('/user-management', function(){
    return view('admin.user_management');
});

Route::get('/admin', function(){
    return view('admin.dasboard');
});

Route::get('/watch-management', function(){
    return view('admin.watch_management');
});