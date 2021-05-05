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

// pagine fatte apposta (qui il commento è php, non c'è controllo di Mr.Blade)

Route::get('/test_01', function () {
    return view('test_01');
    // return;
});

Route::get('/partials/test_02', function () {
    return view('partials.test_02');
});
