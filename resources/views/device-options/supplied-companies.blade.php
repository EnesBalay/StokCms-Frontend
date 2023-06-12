@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Temin edilen Firmalar</h3>
        <button onclick="modal('add')" class="btn btn-sm btn-primary btn-icon-text">Yeni Ekle</button>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Firma adı</th>
                    <th scope="col">Ülke</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">E-Posta</th>
                    <th scope="col">Sıra</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>temin edilen firma 1</td>
                    <td>Türkiye</td>
                    <td>123123123</td>
                    <td>turk@firmasi.com</td>
                    <td>1</td>
                    <td>
                        <button onclick="modal('edit')" class="btn btn-sm btn-light btn-icon-text">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                        <button onclick="deletion()" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-trash-can"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="/js/supplied-companies/modal.js"></script>
    <script src="/js/deletion.js"></script>
</div>
@endsection
