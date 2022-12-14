@extends('layout.master-mini')
@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <div class="auto-form-wrapper">
        <form method="post" action="{{ route('auth.user') }}">
            @csrf
          <div class="form-group">
            <label class="label">Email</label>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="email">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" placeholder="*********">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Acessar</button>
          </div>
          <div class="form-group d-flex justify-content-between">
            <!-- <div class="form-check form-check-flat mt-0">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
            </div> -->
            <a href="#" class="text-small forgot-password text-black">Esqueci a senha</a>
          </div>
          <!-- <div class="form-group">
            <button class="btn btn-block g-login">
              <img class="mr-3" src="{{ url('assets/images/file-icons/icon-google.svg') }}" alt="">Log in with Google</button>
          </div> -->
          <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">N??o possui Cadastro a member ?</span>
            <a href="{{ url('/user-pages/register') }}" class="text-black text-small">Crie sua conta</a>
          </div>
        </form>
      </div>
      <ul class="auth-footer">
        <li>
          <a href="#">Condi????es</a>
        </li>
        <li>
          <a href="#">Ajuda</a>
        </li>
        <li>
          <a href="#">Termos</a>
        </li>
      </ul>
      <p class="footer-text text-center">copyright ?? 2022 Mauricio Macedo. All rights reserved.</p>
    </div>
  </div>
</div>

@endsection
