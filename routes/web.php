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

Route::get('/Admin_panel', function () {
    return view('Admin');
});

Route::get('/Client_panel ', function () {
    return view('client');
});

Route::get('client', function () {
    return view('client');
});


//Route::resource('');
