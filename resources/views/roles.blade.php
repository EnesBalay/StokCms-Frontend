@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
            <h3 class="text-primary">Roller</h3>
        <div>
            <a class="btn btn-sm btn-primary" href="/kullanicilar">Kullanıcılar</a>
            <a class="btn btn-sm btn-primary" href="/roller/ekle">Yeni Rol Ekle</a>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rol adı</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Admin</td>
                    <td>
                        <a href="/kullanicilar/edit" class="btn btn-sm btn-light btn-icon-text">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        <button onclick="changeCount('increase')" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-trash-can"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

