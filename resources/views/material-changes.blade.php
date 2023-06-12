@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Malzeme Değişimleri</h3>
        <a href="/malzeme-degisimleri/olustur" type="button" class="btn btn-secondary btn-icon-text">
            + Yeni Ekle
        </a>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Servis Numarası</th>
                    <th scope="col">Marka</th>
                    <th scope="col">Model</th>
                    <th scope="col">Versiyon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>1056</th>
                    <th>GroundTech</th>
                    <th>Gr3</th>
                    <th>1.0</th>
                    <td>
                        <a href="/malzeme-degisimleri/duzenle" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-open-in-new"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection