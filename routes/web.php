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
    return view('welcome');
});
Route::get('index/', function () {
    return view('index');
});

Route::get('layout/', function () {
    return view('layout');
});

Route::get('day3/', function () {
    return view('Day3.index');
});
Route::get('degin/', function () {
    return view('Degin.index');
});
