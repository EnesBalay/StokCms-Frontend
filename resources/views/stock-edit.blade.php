@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <h3 class="text-primary">Stok Düzenle</h3>
<div class="card p-2 my-2">
            <input type="text" class="form-control mb-2" placeholder="Ürün Adı" aria-label="Ürün Adı" value="Test Ürün">
            <input type="text" class="form-control mb-2" placeholder="Ürün Kodu" aria-label="Ürün Kodu" value="Test123">
            <input type="text" class="form-control mb-2" placeholder="Temin Süresi" aria-label="Temin Süresi" value="30 gün">
            <input type="text" class="form-control mb-2" placeholder="Raf Grup / Raf No" aria-label="Raf Grup / Raf No" value="Raf Grup 1 / Raf Numarası 1">
            <input type="text" class="form-control mb-2" placeholder="Stok" aria-label="Stok" value="552">
            <input type="text" class="form-control mb-2" placeholder="Durum" aria-label="Durum" value="Test Durum">
</div>
<div className="d-flex align-items-end">
        <button class="btn btn-sm btn-primary">Düzenle</button>
</div>
</div>
@endsection

