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
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Toplam Üretim</p>
                            <p class="fs-30 mb-2">1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Toplam Maliyet</p>
                            <p class="fs-30 mb-2">93.00 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4">Kritik Stok</p>
                            <p class="fs-30 mb-2">0 Ürün</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Number of Clients</p>
                            <p class="fs-30 mb-2">47033</p>
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
                        <button type="button" class="btn btn-sm btn-primary">Tümünü Gör</button>
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
                        <button type="button" class="btn btn-sm btn-primary">Tümünü Gör</button>
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
                                    <td>GroundTech</td>
                                    <td>Gr3</td>
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
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center">
                    <div class="icon">
                        <i class="mdi mdi-buffer text-primary" style="font-size: 30px;"></i>
                    </div>
                    <div class="detail">
                        <h2>2</h2>
                        <p>Malzeme</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center">
                    <div class="icon">
                        <i class="mdi mdi-animation text-primary" style="font-size: 30px;"></i>
                    </div>
                    <div class="detail">
                        <h2>1</h2>
                        <p>Cihaz</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center">
                    <div class="icon">
                        <i class="mdi mdi-signal text-primary" style="font-size: 30px;"></i>
                    </div>
                    <div class="detail">
                        <h2>1</h2>
                        <p>Malzeme Değişimi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center d-flex" style="align-content: space-between;flex-wrap: wrap;justify-content: center;">
                    <div class="icon">
                        <i class="mdi mdi-currency-try text-primary" style="font-size: 30px;"></i>
                    </div>
                    <div class="detail">
                        <h4>279.00 TL</h4>
                        <p>Malzeme Değişim Maliyeti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex align-items-center" style="justify-content: space-between;">Üretilen Cihaz  <button type="button" class="btn btn-sm btn-primary">Cihazlar</button></h4>
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