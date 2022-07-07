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

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/biodata/{nama}', function ($a) {
    return view('pages.index2', compact('a'));
});

Route::get('/pesanan/{nama?}', function ($a = "pesanan anda kosong") {
    return view('pages.index3', compact('a'));
});