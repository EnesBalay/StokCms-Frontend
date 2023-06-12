@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Kullanıcılar</h3>
        <div>
            <a class="btn btn-sm btn-primary" href="/roller">Roller</a>
            <a class="btn btn-sm btn-primary" href="/kullanicilar/add">Yeni Kullanıcı Ekle</a>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kullanıcı</th>
                    <th scope="col">E-Posta</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Rol</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Smith</td>
                    <td>john@smith.com</td>
                    <td>123123213</td>
                    <td>Admin</td>
                    <td>
                        <a href="/kullanicilar/edit" class="btn btn-sm btn-light btn-icon-text">
                            <i class="mdi mdi-pencil"></i>
                        </a>
<<<<<<< HEAD
                        <button onclick="changeCount('increase')" class="btn btn-sm btn-danger btn-icon-text">
=======
                        <button onclick="deletion()" class="btn btn-sm btn-primary btn-icon-text">
>>>>>>> 2ab5448 (changes)
                            <i class="mdi mdi-trash-can"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="/js/deletion.js"></script>
</div>
@endsection
