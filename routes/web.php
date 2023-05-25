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
    return view('login');
});

Route::get('/kayit-ol', function () {
    return view('signup');
});

Route::get('/anasayfa', function () {
    return view('index');
});

Route::get('/urunler', function () {
    return view('products');
});

Route::get('/malzemeler', function () {
    return view('materials');
});

Route::get('/stok', function () {
    return view('stock');
});

Route::get('/raporlar', function () {
    return view('reports');
});
