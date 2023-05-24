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
    return view('ana_sayfa');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/kayit', function () {
    return view('kullanici_kayit');
});

Route::get('/ilan', function () {
    return view('ilan');
});




