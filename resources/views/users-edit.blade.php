@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Kullanıcı Düzenle</h3>
        <div>
            <a href="/kullanicilar" type="button" class="btn btn-sm btn-light">Geri</a>
            <button class="btn btn-sm btn-danger">Sil</button>
            <button class="btn btn-sm btn-primary">Düzenle</button>
        </div>
    </div>
<div class="card p-2 my-2">
            <input type="text" class="form-control mb-2" placeholder="Ad Soyad" aria-label="Ad Soyad" value="John Smith">
            <input type="text" class="form-control mb-2" placeholder="E-Posta" aria-label="E-Posta" value="john@smith.com">
            <input type="text" class="form-control mb-2" placeholder="+90123123123" aria-label="Telefon" value="30 gün">
            <input type="text" class="form-control mb-2" placeholder="Raf Grup / Raf No" aria-label="Raf Grup / Raf No" value="Raf Grup 1 / Raf Numarası 1">
            <input type="text" class="form-control mb-2" placeholder="Stok" aria-label="Stok" value="552">
            <input type="text" class="form-control mb-2" placeholder="Durum" aria-label="Durum" value="Test Durum">
</div>
</div>
@endsection


