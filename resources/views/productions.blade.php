@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Üretim</h3>
        <a class="btn btn-sm btn-primary" href="/uretim/olustur">Yeni Ekle</a>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Malzeme Ara" aria-label="Ara..">
            <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="button">Ara</button>
            </div>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Barkod</th>
                    <th scope="col">Seri Numarası</th>
                    <th scope="col">Marka</th>
                    <th scope="col">model</th>
                    <th scope="col">versiyon</th>
                    <th scope="col">Üretim Tarihi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>T1111111111</td>
                    <td>111111111111111</td>
                    <td>Test</td>
                    <td>A1</td>
                    <td>1.0</td>
                    <td>14.11.2022</td>
                    <td>
                        <a href="/uretim/duzenle" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-open-in-new"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection