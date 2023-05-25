@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <h3 class="text-primary">Ürün Grupları</h3>
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
                    <th scope="col">Üst Kategori</th>
                    <th scope="col">Sıra</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Ürün Grubu 12</th>
                    <td></td>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-dark btn-icon-text">
                            <i class="mdi mdi-brush"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger btn-icon-text">
                            <i class="mdi mdi-delete-forever"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection