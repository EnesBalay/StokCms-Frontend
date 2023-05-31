@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Stok</h3>
        <a class="btn btn-sm btn-primary" href="/stok-ekle">Yeni Stok Ekle</a>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Stok Ara" aria-label="Stok Ara">
            <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="button">Ara</button>
            </div>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Ürün kodu</th>
                    <th scope="col">Temin Süresi</th>
                    <th scope="col">Raf Grup / Raf No</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Durum</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Test Ürün</th>
                    <th>Test123</th>
                    <th>30 Gün</th>
                    <th>Raf Grup 1 / Raf Numarası 1</th>
                    <th>552</th>
                    <td><span class="badge bg-primary text-light">Test Durum</span></td>
                    <td>
                        <a type="button" href="/stok-duzenle" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-light btn-icon-text">
                            <i class="mdi mdi-open-in-new"></i>
                        </button>
                        <button type="button" onclick="confirm('Bu öğeyi silmek istiyor musunuz ?')" class="btn btn-sm btn-danger btn-icon-text">
                            <i class="mdi mdi-delete-forever"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection