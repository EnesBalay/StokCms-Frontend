@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Cihaz Tanımlama</h3>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Marka</th>
                    <th scope="col">Model</th>
                    <th scope="col">Versiyon</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Foo tech</th>
                    <th>Fr3</th>
                    <th>1.23</th>
                    <td>
                        <a href="/cihaz-tanimlama/duzenle" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-open-in-new"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
