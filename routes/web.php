<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage.landingpage');
});

Route::get('/register', function(){
    return view('user.register');
});
