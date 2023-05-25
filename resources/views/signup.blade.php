@extends('layouts.full-width')
@section('content')
<div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0">
        <div class="col-xl-5 col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                    <img src="/images/logo.png" alt="logo">
                </div>
                <h4>Yeni misiniz?</h4>
                <h6 class="font-weight-light">Aşağıdaki bilgileri doldurarak kolayca üye olabilirsiniz.</h6>
                <form class="pt-3">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Kullanıcı Adı">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="E-Posta">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control form-control-lg" id="exampleInputPhone1" placeholder="Telefon">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Şifre">
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input">
                                KVKK metnini okudum onaylıyorum.
                            </label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="/anasayfa">Kayıt Ol</a>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                        Zaten bir hesabınız var mı? <a href="/" class="text-primary">Giriş Yap</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
@endsection