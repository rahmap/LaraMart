@extends('layouts.home-template')

@section('subTitle', 'Log In')

@section('outCSS')
<link rel="stylesheet" href="{{ asset('shopaholic') }}/css/pages/register.css">
@endsection

@section('content')
<section class="login-section">
  <div class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="sign-in bg-gray">
            <h2 class="title">Have an account? Log in</h2>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group @error('email') has-error has-feedback @enderror">
                <label class="control-label" for="inputError2">Email</label>
                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group @error('password') has-error has-feedback @enderror">
                <label class="control-label" for="inputError2">Password</label>
                <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" required autocomplete="current-password" autofocus>
                @error('password')
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <p class="form-input">
                <input type="submit" name="wp-submit" id="wp-submit" class="btn" value="Sign In" />
              </p>
              <p class="checkbox pull-left">
                <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                Remember Me
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="pull-right" title="Recover Your Lost Password">Forgot password?</a>
                @endif
              </p>
            </form>
          </div><!-- /.sign-in -->
        </div>
      </div><!-- /.row -->
    </div><!--/.container-->
  </div><!-- /.section-padding -->
</section><!--/.login-section-->
@endsection

@section('footer')
