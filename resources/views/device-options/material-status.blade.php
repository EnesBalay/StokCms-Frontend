@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Malzeme Durumları</h3>
        <button onclick="modal('add')" class="btn btn-sm btn-primary btn-icon-text">Yeni Ekle</button>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Durum Adı</th>
                    <th scope="col">Sıra</th>
                    <th scope="col">Renk</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Test Durum</td>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon" style="background-color: purple;border:none;">
                        </button>
                    </td>
                    <td>
                        <button onclick="modal('edit')" class="btn btn-sm btn-light btn-icon-text">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                        <button onclick="deletion()" class="btn btn-sm btn-danger btn-icon-text">
                            <i class="mdi mdi-trash-can"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="/js/device-options/material-status/modal.js"></script>
    <script src="/js/deletion.js"></script>
</div>
@endsection
