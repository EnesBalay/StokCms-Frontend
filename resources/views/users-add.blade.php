@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Kullanıcı Ekle</h3>
        <div>
            <a class="btn btn-sm btn-light" href="/roller">Geri</a>
            <button class="btn btn-sm btn-primary" href="/kullanicilar/add">Kaydet</button>
        </div>
    </div>
<div class="card p-2 my-2">
            <input type="text" class="form-control mb-2" placeholder="Ad Soyad" aria-label="Ad Soyad">
            <input type="text" class="form-control mb-2" placeholder="E-Posta" aria-label="E-Posta">
            <input type="text" class="form-control mb-2" placeholder="Telefon" aria-label="Telefon">
            <input type="text" class="form-control mb-2" placeholder="Rol" aria-label="Durum">
            <input type="text" class="form-control mb-2" placeholder="Şifre" aria-label="Şifre">
            <input type="text" class="form-control mb-2" placeholder="Şifre (Tekrar)" aria-label="Şifre Tekrar">
</div>
</div>
@endsection


