@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <form action="" method="POST" class="needs-validation form-jq" novalidate="">
        <div class="d-flex justify-content-between mb-2">
            <h3 class="text-primary">Cihaz Tanımlama</h3>
            <button type="button" class="btn btn-primary btn-icon-text">
                <i class="ti-file btn-icon-prepend"></i>
                Kaydet
            </button>
        </div>
        <div class="card p-2 my-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 card-title">
                        Malzeme Bilgileri Düzenleme
                        <hr />
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="marka">Marka</label>
                            <select class="form-control" id="marka" name="marka" disabled>
                                <option>Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <select class="form-control" name="model" id="model" disabled>
                                <option default>A1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="versiyon">Versiyon</label>
                            <select class="form-control" name="versiyon" id="versiyon" disabled>
                                <option default>1.0</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card p-2 my-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 card-title">
                        Malzemeler
                        <hr />
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Test Ürün</label>
                            <div>
                                <input type="number" value="0" class="form-control" placeholder="Test Ürün">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vida</label>
                            <div>
                                <input type="number" value="0" class="form-control" placeholder="Vida">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection