@extends('layouts.app')

@section('title')
  IndicatorFx Signals | Login
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/signin.css')}}">
@endsection

@section('area1')
  <div class="main">
  <p class="sign" align="center">Login</p>
  <form class="form1">
  <input class="un " type="text" align="center" placeholder="Username">
  <input class="pass" type="password" align="center" placeholder="Password">
  <a class="submit" align="center">Sign in</a>
  <p class="forgot" align="center" style="padding-bottom: 10px;"><a href="#">Forgot Password?</a></p>
    <hr>
  <p align="center" style="padding-top: px;">Do not have an account? <a href="#">Sign up</a></p>
  </form>
  <br>
  <hr>
  </div>
@endsection

@section('area2')
<button class="btn btn-danger btn-md" style="border-radius: 5em; width: 13%; margin-left: 43.3%; margin-top: -100px;"><i class="fab fa-google"></i> Login with Google</button>
<button class="btn btn-primary btn-md" style="border-radius: 5em; width: 13%; margin-left: 43.3%; margin-top: -50px"><i class="fab fa-facebook-square"></i> Login with Facebook</button>
@endsection
