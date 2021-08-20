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
    return view('sites/home');
});

Route::get('/login', function () {
    return view('sites/login');
});

Route::get('/login-form', function () {
    return redirect('/home');
});

Route::get('/register', function () {
    return view('sites/register');
});

Route::get('/register-form', function () {
    return redirect('/home');
});

Route::get('/calculations', function () {
    return view('sites/calculations');
});
