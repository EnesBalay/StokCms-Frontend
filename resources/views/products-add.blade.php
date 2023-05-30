@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <h3 class="text-primary">Ürün Ekle</h3>
<div class="card p-2 my-2">

            <input type="text" class="form-control mb-2" placeholder="Kategori adı" aria-label="Kategori adı">
            <input type="text" class="form-control mb-2" placeholder="Üst kategori" aria-label="Üst kategori">
            <input type="text" class="form-control mb-2" placeholder="Temin Süresi" aria-label="Temin Süresi">
</div>
<div className="d-flex align-items-end">
        <button class="btn btn-sm btn-primary">Ekle</button>
</div>
</div>
@endsection

