@extends('layouts.full-width')
@section('content')
<div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0">
        <div class="col-xl-5 col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                    <img src="/images/logo.png" alt="logo">
                </div>
                <h4>Merhaba, Hoş Geldiniz!</h4>
                <h6 class="font-weight-light">Devam etmek için giriş yapınız.</h6>
                <form class="pt-3">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Kullanıcı Adı">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Şifre">
                    </div>
                    <div class="mt-3">
                        <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="/anasayfa">Giriş Yap</a>
                    </div>


                    <div class="text-center mt-4 font-weight-light">
                        Bir hesabınız yok mu? <a href="/kayit-ol" class="text-primary">Kayıt Ol</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
@endsection