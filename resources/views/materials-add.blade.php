@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <h3 class="text-primary">Malzeme Ekle</h3>
<div class="card p-2 my-2">
            <input type="text" class="form-control mb-2" placeholder="Ürün Adı" aria-label="Ürün Adı">
            <input type="text" class="form-control mb-2" placeholder="Ürün Kodu" aria-label="Ürün Kodu">
            <input type="text" class="form-control mb-2" placeholder="Temin Süresi" aria-label="Temin Süresi">
            <input type="text" class="form-control mb-2" placeholder="Raf Grup / Raf No" aria-label="Raf Grup / Raf No">
            <input type="text" class="form-control mb-2" placeholder="Stok" aria-label="Stok">
            <input type="text" class="form-control mb-2" placeholder="Durum" aria-label="Durum">
</div>
<div className="d-flex align-items-end">
        <button class="btn btn-sm btn-primary">Ekle</button>
</div>
</div>
@endsection

