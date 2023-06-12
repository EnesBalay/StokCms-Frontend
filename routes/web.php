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

Route::get('/kritik-stok', function () {
    return view('critical-stocks');
});

Route::get('/cihaz-tanimlama', function () {
    return view('device-registrations');
});

Route::get('/malzeme-degisimleri', function () {
    return view('material-changes');
});

Route::get('/uretim', function () {
    return view('productions');
});

Route::get('/cihaz-markalari', function () {
    return view('device-options/device-brands');
});

Route::get('/cihaz-modelleri', function () {
    return view('device-options/device-models');
});

Route::get('/cihaz-versiyonlari', function () {
    return view('device-options/device-versions');
});

Route::get('/raf-gruplari', function () {
    return view('device-options/shelf-groups');
});

Route::get('/raf-numaralari', function () {
    return view('device-options/shelf-numbers');
});

Route::get('/malzeme-durumlari', function () {
    return view('device-options/material-status');
});

Route::get('/temin-edilen-firmalar', function () {
    return view('device-options/supplied-companies');
});

Route::get('/bildirim-ayarlari', function () {
    return view('device-options/notification-settings');
});

Route::get('/raporlar', function () {
    return view('reports');
});

Route::get('/kullanicilar', function () {
    return view('users');
});

Route::get('/kullanicilar/edit', function () {
    return view('users-edit');
});

Route::get('/kullanicilar/add', function () {
    return view('users-add');
});

Route::get('/roller', function () {
    return view('roles');
});

Route::get('/roller/ekle', function () {
    return view('roles-add');
});

Route::get('/ayarlar', function () {
    return view('settings');
});

