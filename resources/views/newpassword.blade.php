@extends('layouts.app')

@section('title')
  IndicatorFx Signals | New Password
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/signup.css')}}">
@endsection

@section('area1')
<div class="sign-up-form">
  <h1>Enter New Password</h1>
  <form>
    <input type="email" class="input-box" placeholder="Email">
    <input type="password" class="input-box" placeholder="password">
    <input type="re-enter" class="input-box" placeholder="Re-enter password">

    <button type="button" class="signup-btn">Reset Password</button>

  </form>
</div>
@endsection
