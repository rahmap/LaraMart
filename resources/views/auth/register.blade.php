@extends('layouts.home-template')

@section('subTitle', 'Register')

@section('outCSS')
<link rel="stylesheet" href="{{ asset('shopaholic') }}/css/pages/register.css">
@endsection

@section('content')
<section class="login-section">
  <div class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="sign-up">
            <h2 class="title">Get Registered <span></span></h2><!-- /.title -->

            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-grup @error('name') has-error has-feedback @enderror">
                  <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <br>
              <div class="form-grup @error('email') has-error has-feedback @enderror">
                  <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="glyphicon glyphicon-remove form-control-feedback mt-0" aria-hidden="true"></span>
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <br>
              <div class="form-grup @error('password') has-error has-feedback @enderror">
                  <input id="password" placeholder="password" type="password" class="form-control" name="password" required autocomplete="new-password" autofocus>
                  @error('password')
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <br>
              <div class="form-grup">
                  <input id="password_confirmation" placeholder="Password Confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus>
              </div>
              <p class="checkbox pull-left">
                <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                I agree the 
                <a href="#"> terms and conditions</a>
              </p>
              <p class="submit-input pull-right">
                <input type="submit" class="btn" name="signup-form-submit" value="Register">
              </p>
            </form>
          </div><!-- /.sign-up -->

        </div>
      </div><!-- /.row -->
    </div><!--/.container-->
  </div><!-- /.section-padding -->
</section><!--/.login-section-->
@endsection

@section('footer')
