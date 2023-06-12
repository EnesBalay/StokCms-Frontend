@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <form action="" method="POST" class="needs-validation form-jq" novalidate="">
        <div class="d-flex justify-content-between mb-2">
            <h3 class="text-primary">Üretim Ekle</h3>
            <button type="button" class="btn btn-primary btn-icon-text">
                <i class="ti-file btn-icon-prepend"></i>
                Kaydet
            </button>
        </div>
        <div class="card p-2 my-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 card-title">
                        Üretim Bilgileri
                        <hr />
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="marka">Marka</label>
                            <select class="form-control" id="marka" name="marka">
                                <option>Seçim yapın</option>
                                <option>Deneme</option>
                                <option>Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <select class="js-example-basic-single w-100" name="model" id="model">
                                <option>Seçim yapın</option>
                                <option>A1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="versiyon">Versiyon</label>
                            <select class="js-example-basic-single w-100" name="versiyon" id="versiyon">
                                <option>Seçim yapın</option>
                                <option>1.0</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="production_date" class="input-has-value">Üretim Tarihi</label>
                            <input type="date" class="form-control" name="production_date" id="date">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="production_place" class="input-has-value">Üretim Yeri</label>
                            <input type="text" class="form-control" name="production_place" id="place" placeholder="Üretim Yeri">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="serial_number" class="input-has-value">Seri No</label>
                            <input type="text" class="form-control" name="serial_number" id="serial-number" placeholder="Seri No">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="barcode" class="input-has-value">Barkod</label>
                            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Barkod">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection