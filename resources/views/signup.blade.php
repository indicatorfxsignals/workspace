@extends('layouts.app')

@section('title')
  IndicatorFx Signals | Login
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/signup.css')}}">
@endsection

@section('area1')
<div class="sign-up-form">
  <h1>Sign up</h1>
  <form>
    <input type="email" class="input-box" placeholder="Email">
    <input type="password" class="input-box" placeholder="password">
    <input type="re-enter" class="input-box" placeholder="Re-enter password">
    <p><span><input type="checkbox"></span>I agree to your <a href="#" target="_blank">Terms & conditons</a> and <a href="#" target="_blank">Privacy Policy</a></p>
    <button type="button" class="signup-btn">Create Account</button>
    <hr>
    <p>Have an account? <a href="#">Log in</a></p>


  </form>

</div>
<br>
<hr>
<div class="lower"></div>
@endsection

@section('area2')
<button class="btn btn-danger btn-md" style="border-radius: 5em; width: 13%; margin-left: 43.3%; margin-top: -100px;"><i class="fab fa-google"></i> Login with Google</button>
<button class="btn btn-primary btn-md" style="border-radius: 5em; width: 13%; margin-left: 43.3%; margin-top: -50px"><i class="fab fa-facebook-square"></i> Login with Facebook</button>
@endsection
