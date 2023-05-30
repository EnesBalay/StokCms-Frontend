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

Route::get('/urunler-ekle', function () {
    return view('products-add');
});

Route::get('/urunler-duzenle', function () {
    return view('products-edit');
});

Route::get('/malzemeler', function () {
    return view('materials');
});

Route::get('/malzemeler-ekle', function () {
    return view('materials-add');
});

Route::get('/malzemeler-duzenle', function () {
    return view('materials-edit');
});

Route::get('/stok', function () {
    return view('stock');
});

Route::get('/stok-ekle', function () {
    return view('stock-add');
});

Route::get('/stok-duzenle', function () {
    return view('stock-edit');
});

Route::get('/raporlar', function () {
    return view('reports');
});
