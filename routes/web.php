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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admindashboard', function () {
    return view('admindashboard');
});

Route::get('/userdashboard', function () {
    return view('userdashboard');
});
Route::get('/userdashboard/{any}', function () {
    return view('userdashboard');
});
Route::get('/admindashboard/{any}', function () {
    return view('admindashboard');
});
