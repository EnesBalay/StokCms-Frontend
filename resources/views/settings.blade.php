@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Ayarlar
            </h3>
            <button type="button" class="btn btn-primary btn-icon-text" >
                <i class="ti-file btn-icon-prepend"></i>
                Kaydet
            </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Döviz Ayarları</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SMS Ayarları</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rate" id="rate2" value="1" checked>
                                        Güncel Kur
                                        <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rate" id="rate1" value="">
                                        Sabit Kur
                                        <i class="input-helper"></i></label>
                                </div>
                            </div>
                            <div id="eurUsdSection">
                                <div class="form-group">
                                    <label for="stock" class="input-has-value">USD</label>
                                    <input type="number" class="form-control" value="" name="usd" id="usd" placeholder="USD">
                                </div>
                                <div class="form-group">
                                    <label for="stock" class="input-has-value">EUR</label>
                                    <input type="number" class="form-control" value="" name="eur" id="eur" placeholder="EUR">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label for="usercode" class="input-has-value">NETGSM Usercode (Abone No)</label>
                                <input type="text" class="form-control" id="usercode" name="usercode" placeholder="NETGSM Usercode (Abone No)">
                            </div>
                            <div class="form-group">
                                <label for="usercode" class="input-has-value">NETGSM Password (Kullanıcı Şifresi)</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="NETGSM Password (Kullanıcı Şifresi)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    const radios = document.querySelectorAll('input[name="rate"]');
    const eurUsd = document.getElementById("eurUsdSection");
    radios.forEach(radio => {
        radio.addEventListener('click', function() {
            radioVal = radio.value;
            if (radioVal != 1) {
                eurUsd.style.display = 'block'
            } else {
                eurUsd.style.display = 'none'
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        radios.forEach(radio => {
            radioVal = radio.value;
            if (radioVal == 1) {
                eurUsd.style.display = 'none'
            }
        });
    }, false);
</script>
@endsection