@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Hoşgeldin Ahmet</h3>
                    <h6 class="font-weight-normal mb-0">Bu sayfadan kritik stoklarını kontrol edebilir, üretim grafiklerini görüntüleyebilirsin. </h6>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="row">
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Toplam Üretim</p>
                            <p class="fs-30 mb-2">1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Toplam Maliyet</p>
                            <p class="fs-30 mb-2">93.00 ₺</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Kritik Stok</p>
                            <p class="fs-30 mb-2">0 Ürün</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex align-items-center" style="justify-content: space-between;">Kritik Stok
                        <a href="/kritik-stok" class="btn btn-sm btn-primary">Tümünü Gör</a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Ürün Adı</th>
                                    <th scope="col">Ürün Kodu</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Temin süresi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>53275531</td>
                                    <td>3</td>
                                    <td>5 Gün</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex align-items-center" style="justify-content: space-between;">Son Üretilenler
                        <a href="/kritik-stok" class="btn btn-sm btn-primary">Tümünü Gör</a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Barkod</th>
                                    <th scope="col">Marka</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Versiyon</th>
                                    <th scope="col">Üretim Tarihi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>T1111111111</td>
                                    <td>Test</td>
                                    <td>A1</td>
                                    <td>1.0</td>
                                    <td>14.11.2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components._dashboard-cards')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex align-items-center" style="justify-content: space-between;">Üretilen Cihaz  <a href="/cihaz-tanimlama" class="btn btn-sm btn-primary">Cihazlar</a></h4>
                    <hr />
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>0</h1>
                            <h6 class="mb-4">Bu ay Üretilen</h6>
                            <p><i class="mdi mdi-arrow-down-drop-circle text-danger" style="font-size: large;"></i> Geçen aya göre <span class="text-danger">0 Cihaz</span></p>
                            <a class="btn btn-primary w-100 mt-2" href="/raporlar">Detaylı Rapor</a>
                        </div>
                        <div class="col-lg-6">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection