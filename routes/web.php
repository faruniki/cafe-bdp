<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Route::get('/layouts.main', function () {
    return view('layouts.main');
});

Route::get('/menu', function () {
    return view('user.menu');
});

Route::get('/reviews', function () {
    return view('user.reviews');
});

Route::get('/contact', function () {
    return view('user.contact');
});

//transaction

Route::get('/menu/order', function () {
    return view('user.order.order');
});
