<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get('/laravel-9', function () {
    return view('welcome');
});
=======
Route::get('/laravel-confrariaweb', function () {
    return view('welcome');
});
>>>>>>> 481e667e463356a5001123e6f52a9ba5c32a7c08
