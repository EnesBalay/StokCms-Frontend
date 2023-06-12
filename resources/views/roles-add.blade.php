@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
            <h3 class="text-primary">Roller</h3>
        <div>
            <a class="btn btn-sm btn-primary" href="/kullanicilar">Geri</a>
            <button class="btn btn-sm btn-primary">Kaydet</button>
        </div>
    </div>
<div class="card p-2 my-2">
            <input type="text" class="form-control mb-2" placeholder="Rol Adı" aria-label="Rol Adı">
                <select class="js-example-basic-multiple" multiple="multiple">
                  <option value="AL">Admin</option>
                  <option value="WY">User</option>
                  <option value="AM">Guest</option>
                </select>
</div>
</div>
@endsection


