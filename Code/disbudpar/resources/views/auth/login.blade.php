@extends('layouts.layout_user')

@section('title')
Login
@stop

@section('content')
      <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('user/images/gambar.jpg') center center no-repeat; background-size: cover;"></div>

        <div class="section nobg full-screen nopadding nomargin">
          <div class="container vertical-middle divcenter clearfix">

            <div class="row center">
              <!-- <a href="index.html"><img src="{{ asset('users/images/logo-dark.png') }}" alt="Canvas Logo"></a> -->
            </div>

            <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
              <div class="panel-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="nobottommargin"  method="POST" action="{{ route('login') }}">
                @csrf
                  <h3>Login</h3>

                  <div class="col_full">
                    <label for="login-form-username">{{ __('Alamat Email') }}</label>
                     <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                     @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>

                  <div class="col_full">
                    <label for="login-form-password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    
                     @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                   
                  </div>

                  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingatkan Saya') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                    <div class="col_full nobottommargin">
                                <button type="submit" class="button button-3d button-black nomargin">
                                    {{ __('Masuk') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="fright" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                @endif
                            </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
@endsection