@extends('layouts.app')
@section('content')
<style>
    .select2-container--default .select2-selection--single {
        height: 2.875rem;
    }

    .select2-container {
        width: 100% !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 9px;
    }
</style>
<div class="content-wrapper">
    <div class="card p-2 my-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12 card-title">
                    Malzeme Bilgileri Düzenleme
                    <button class="btn btn-primary mx-3" style="float: right;">Kaydet</button>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="name" class="input-has-value">Ürün adı</label>
                        <input type="text" class="form-control" value="Test Ürün" id="name" name="name" placeholder="Ürün adı">
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="code" class="input-has-value">Ürün kodu</label>
                        <input type="text" class="form-control" value="Test123" id="code" readonly="" disabled="" placeholder="Ürün kodu">
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="shelf">Ürün Grubu</label>
                        <select class="js-example-basic-single w-100" name="material_group_id" id="shelf">
                            <option>Seçiniz</option>
                            <option value="1">Kategori 1</option>
                            <option value="2">Kategori 2</option>
                            <option value="3">Kategori 3</option>
                            <option value="4">Kategori 4</option>
                            <option value="5">Kategori 5</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group input-addons">
                        <label for="time" class="input-has-value">Temin süresi</label>
                        <div class="input-group">
                            <input type="number" class="form-control" value="30" name="lead_time" id="time" placeholder="Temin süresi">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" type="button">Gün</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="where" class="input-has-value">Nereden temin edildi?</label>
                        <input type="text" class="form-control" value="test" name="come_from" id="where" placeholder="Nereden temin edildi?">
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="supplied-companies">Temin edilen firma</label>
                        <select class="js-example-basic-single w-100" name="supplied_company_id" id="supplied-companies">
                            <option>Seçiniz</option>
                            <option value="1">Firma 1</option>
                            <option value="2">Firma 2</option>
                            <option value="3">Firma 3</option>
                            <option value="4">Firma 4</option>
                            <option value="5">Firma 5</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="shelf_group_id">Raf Grubu</label>
                        <select class="js-example-basic-single w-100" id="create_shelf_group_id" name="shelf_group_id">
                            <option>Seçiniz</option>
                            <option value="1">Raf Grup 1</option>
                            <option value="2">Raf Grup 2</option>
                            <option value="3">Raf Grup 3</option>
                            <option value="4">Raf Grup 4</option>
                            <option value="5">Raf Grup 5</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="shelf_number_id">Raf No</label>
                        <select class="js-example-basic-single w-100" name="shelf_number_id" id="create_shelf_number">
                            <option>Seçiniz</option>
                            <option value="1">Raf No 1</option>
                            <option value="2">Raf No 2</option>
                            <option value="3">Raf No 3</option>
                            <option value="4">Raf No 4</option>
                            <option value="5">Raf No 5</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="cost" class="input-has-value">Maliyet</label>
                        <input type="text" class="form-control" value="55.00" name="cost" id="cost" placeholder="Maliyet">
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="exchange-rate">Kur</label>
                        <select class="js-example-basic-single w-100" name="currency" id="exchange-rate">
                            <option>Seçiniz</option>
                            <option value="lira">Lira</option>
                            <option value="dolar">Dolar</option>
                            <option value="tl">Euro</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="stock" class="input-has-value">Stok</label>
                        <input type="number" class="form-control" value="552" name="qty" id="stock" placeholder="Stok">
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="form-group">
                        <label for="stock" class="input-has-value">Sıra</label>
                        <input type="number" class="form-control" value="1" name="order" id="order" placeholder="Sıra">
                    </div>
                </div>

                <div class="col-md-2 col-sm-12 d-flex">
                    <div class="form-check form-check-primary self-item-center " style="position: relative;top: 30%;">
                        <label class="form-check-label">
                            <input name="stock_status" value="1" type="checkbox" id="stock-check" class="form-check-input" checked="">
                            Stoktan düşsün
                            <i class="input-helper"></i></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-2 my-2">
        <div class="card-body">
            <div class="card-title">
                Bildirimler
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check form-check-primary self-item-center " style="position: relative;top: 30%;">
                        <label class="form-check-label">
                            <input name="stock_status" value="1" type="checkbox" id="stock-check" class="form-check-input" checked="">
                            Kritik seviye alarmı
                            <i class="input-helper"></i></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-primary self-item-center " style="position: relative;top: 30%;">
                        <label class="form-check-label">
                            <input name="stock_status" value="1" type="checkbox" id="stock-check" class="form-check-input" checked="">
                            Mail bildirimi
                            <i class="input-helper"></i></label>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label for="critical_qty">Kritik Seviye</label>
                        <input type="number" class="form-control" value="1" name="critical_qty">
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-check form-check-primary self-item-center " style="position: relative;top: 30%;">
                        <label class="form-check-label">
                            <input name="stock_status" value="1" type="checkbox" id="stock-check" class="form-check-input" checked="">
                            Mail bildirimi
                            <i class="input-helper"></i></label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection