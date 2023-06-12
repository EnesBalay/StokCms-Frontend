@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Ürünler</h3>
        <a class="btn btn-sm btn-primary" href="/urunler-ekle">Yeni ürün Ekle</a>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Ürün Ara" aria-label="Ürün Ara">
            <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="button">Ara</button>
            </div>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Kategori Adı</th>
                    <th scope="col">Üst kategori</th>
                    <th scope="col">Sıra</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ürün Grubu 12</td>
                    <td></td>
                    <td>1</td>
                    <td>
                        <a type="button" href="/urunler-duzenle" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-light btn-icon-text">
                            <i class="mdi mdi-open-in-new"></i>
                        </button>
                        <button type="button" onclick="deletion()" class="btn btn-sm btn-danger btn-icon-text">
                            <i class="mdi mdi-delete-forever"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="/js/deletion.js"></script>
</div>
@endsection
