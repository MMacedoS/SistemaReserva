@extends('layout.master-mini')
@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <div class="auto-form-wrapper">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
            <h3 class="text-center">PetShop</h3>
        {!!Form::open()->method('post')->route('auth.user')!!}

            <div class="form-group">
                {!!Form::text('email','Email')->type('email')!!}
            </div>
            <div class="form-group">
                {!!Form::text('password','Password')->type('password')!!}
            </div>
            <div class="row d-flex justify-content-between ml-1 mr-1">
                <div class="form-group">
                    {!! Form::button("Acessar")->info()->type('submit')
                        !!}
                </div>
                <div class="form-group d-flex justify-content-between mt-2">
                    <a href="#" class="text-small forgot-password text-black">Esqueci a senha</a>
                </div>
            </div>
        {!!Form::close()!!}

      </div>
      <ul class="auth-footer">
        <li>
          <a href="#">Condições</a>
        </li>
        <li>
          <a href="#">Ajuda</a>
        </li>
        <li>
          <a href="#">Termos</a>
        </li>
      </ul>
      <p class="footer-text text-center">copyright © 2022 Mauricio Macedo. All rights reserved.</p>
    </div>
  </div>
</div>

@endsection
