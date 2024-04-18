<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('pages.login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/loginadmin',function(){
    return view('pages.adminlogin');
});

Route::get('/homeadmin', function () {
    return view('admin.indexadmin');
});

Route::get('/blog',function(){
    return view('pages.blog');
});


// -------------------BACKEND-------------------------

// -------------USER-----------------
Route::post('/home', [Usercontroller::class, 'home'])->name('home');
Route::get('/log_out', [Usercontroller::class, 'pages.login'])->name('pages.login');

// --------------ADMIN-------------------
Route::post('/homeadmin', [AdminController::class,'homeadmin'])->name('homeadmin');

