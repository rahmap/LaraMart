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
              <p class="form-input">
                <div class="form-input @error('email') has-error has-feedback @enderror">
                  <label class="control-label" for="inputError2">Email</label>
                  <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </p>
              <p class="form-input">
                <input type="text" class="form-control" placeholder="Last Name">  
              </p>
              <p class="form-input">                                  
                <input type="email" class="form-control" placeholder="Email" required>
              </p>
              <p class="form-input">
                <input type="text" class="form-control" placeholder="Phone" required>
              </p>
              <p class="form-input">
                <input type="password" class="form-control" placeholder="Password" required>
              </p>
              <p class="form-input">
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
              </p>
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
