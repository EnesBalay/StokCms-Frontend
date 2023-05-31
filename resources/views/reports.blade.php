@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Raporlar</h3>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Malzeme Ara" aria-label="Malzeme Ara">
            <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="button">Ara</button>
            </div>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Rapor Adı</th>
                    <th scope="col">Rapor kodu</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Test Raport</th>
                    <th>Test123</th>
                    <td>
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

