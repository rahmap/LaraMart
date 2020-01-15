@extends('layout.home-template')

@section('subTitle', 'Auth')

@section('outCSS')
<link rel="stylesheet" href="{{ asset('shopaholic') }}/css/pages/register.css">
@endsection

@section('descTitle','Selamat datang di LaraMart')

@section('desc','Login / Registration for begin shopping')

@section('content')
<section class="login-section">
  <div class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="sign-in bg-gray">
            <h2 class="title">Have an account? Log in</h2>
            <form class="sign-in-form" id="sign-in-form" action="#" method="post">
              <p class="form-input">
                <input type="text" name="log" id="user_login" class="input" value="" placeholder="Username / Email" required/>
              </p>
              <p class="form-input">
                <input type="password" name="pwd" id="user_pass" class="input" value="" placeholder="Password" required/>
              </p>
              <p class="form-input">
                <input type="submit" name="wp-submit" id="wp-submit" class="btn" value="Sign In" />
              </p>
              <p class="checkbox pull-left">
                <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                Remember Me
                <a href="#" class="pull-right" title="Recover Your Lost Password">Forgot password?</a>
              </p>
            </form>

            <div class="login-social">
              <button class="btn facebook">Sign in With Facebook</button>
              <button class="btn twitter">Sign in With Twitter</button> 
            </div><!-- /.login-social -->
          </div><!-- /.sign-in -->
        </div>

        <div class="col-md-7">
          <div class="sign-up">
            <h2 class="title">Get Registered <span></span></h2><!-- /.title -->

            <form class="signup-form" action="#" method="post">
              <p class="form-input">
                <input type="text" class="form-control" placeholder="First Name" required>
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
                <input type="password" class="form-control" placeholder="Confirm Password" required>
              </p>
              <p class="checkbox pull-left">
                <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                I agree the 
                <a href="#"> terms and conditions</a>
              </p>
              <p class="submit-input pull-right">
                <input type="submit" class="btn" name="signup-form-submit" value="Sign up">
              </p>
            </form>
            <div class="login-social">
              <button class="btn facebook">Register With Facebook</button>
              <button class="btn twitter">Register With Twitter</button> 
            </div><!-- /.login-social -->
          </div><!-- /.sign-up -->

        </div>
      </div><!-- /.row -->
    </div><!--/.container-->
  </div><!-- /.section-padding -->
</section><!--/.login-section-->
@endsection

@section('footer')
