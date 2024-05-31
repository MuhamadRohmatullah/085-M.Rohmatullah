<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\Admin;


Route::resource("user", UserController::class)->middleware([Authenticate::class, Admin::class]);
Route::resource("watch", WatchController::class)->middleware([Authenticate::class, Admin::class]);

Route::controller(UserController::class)->group(function (){
    Route::post('userstore', 'UserRegister')->name('userstore');
    Route::get('/dashboard', 'Admin')->name('dashboard')->middleware([Authenticate::class, Admin::class]);
    Route::get('/user_edit', 'user_edit')->name('user_edit')->middleware([Authenticate::class, Admin::class]);
});


Route::controller(WatchController::class)->group(function () {
    Route::get('mypost', 'mypost')->middleware(Authenticate::class);
    Route::get('home', 'posts')->name('home')->middleware(Authenticate::class);
    Route::get('/', 'landing')->name('landing');
    Route::post('store', 'mypoststore')->name('store');
    Route::get('/detail/{id}', 'detail')->name('detail');
    Route::put('/mypostupdate/{id}', 'mypostupdate')->name('mypostupdate');
    Route::delete('delete/{id}', 'mypostdelete')->name('delete')->middleware(Authenticate::class);
    Route::get('free', 'filter')->name('filter')->middleware(Authenticate::class);
    Route::get('pay', 'pay')->name('pay')->middleware(Authenticate::class);
    Route::get('/watch_edit', 'watch_edit')->name('watch_edit')->middleware([Authenticate::class, Admin::class]);
});

Route::controller(UserProfileController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile')->middleware(Authenticate::class);
    Route::put('/update/{id}', 'updateProfile')->name('update')->middleware(Authenticate::class);
});

Route::post('picture/{id}', [FileController::class, 'upload'])->name('picture');
Route::post('like/{user_id}/{watch_id}', [LikeController::class, 'like'])->name('like');

Route::get('/beranda', function(){
    return view('user.beranda');
});

Route::get('/registration', function(){
    return view('partial.page.user.registration');
});

Route::get('/userCrud', function(){
    return view('admin.user_tables');
})->middleware([Authenticate::class, Admin::class]);

Route::controller(AuthController::class)->group(function () {
    Route::get('/signin', 'loginPage')->name("loginPage");
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/admin_user', function(){
    return view('admin.edituser');
});

Route::get('/admin_watch', function(){
    return view('admin.edit_watch');
});
