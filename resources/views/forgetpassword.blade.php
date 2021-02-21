@extends('layouts.app')

@section('title')
  IndicatorFx Signals | Login | Forget Password
@endsection

@section('link1')
  <link rel="stylesheet" href="{{asset('css/signin.css')}}">
@endsection

@section('link2')
  <link rel="stylesheet" href="{{asset('css/forgetpassword.css')}}">
@endsection

@section('area1')
<div class="main">
 <p class="sign" align="center">Reset Password</p>
 <p style="font-size: 15px" align="center">Please enter your email address</p>
 <form class="form1">
   <input class="un " type="text" align="center" placeholder="Email">
   <a class="submit" align="center" data-toggle="modal" data-target="#myModal">Reset Password</a>

 </form>
 </div>
@endsection
