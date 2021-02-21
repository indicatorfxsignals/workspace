@extends('layouts.app')

@section('title')
  IndicatorFx Signals- Profitable Forex & Gold ntraday Signals on 15 minutes chart.
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@endsection

@section('link2')
  <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
@endsection

@section('link3')
   <link rel="stylesheet" type="text/css" href="{{asset('css/premium_membership.css')}}">
@endsection

@section('header')
  @include('includes.header_al')
@endsection

@section('area1')
<div class="wrapper">
  <div class="left">
      <img src="../images/profile.png"
      alt="user" width="100">
      <h4>Unknown User</h4>
       <p></p>
         <br>
       <ul>
         <li><a href="#">My Account</a></li>
         <li><a href="#">Free Membership</a></li>
         <li><a href="#">Premium Membership</a></li>
       </ul>
  </div>
@endsection

@section('area2')
<div class="right">
      <div class="info">
          <h3>Premium Membership</h3>
          <div class="info_data">

            <div class="premium-varify">
    <p style="color: #ff6600;">Thank you choosing IndicatorFx Signals. Let's start our journey.</p>
    <br>
    <p>Please verify your Premium Membership at Telegram in a few simple steps:</p>
    <ol>
      <li>Please, <a href="">Join Our Telegram Channel.</a></li>
      <li>Message Us (@Indicatorfxsignals) on Telegram with:</li>
          <ul style="padding-left: 20px;">
            <li>Payment screenshot,</li>
            <li>Payment E-mail and</li>
            <li>Your Country name.</li>
          </ul>
      <li>We will verify and add You to Premium Channel immediately.</li>
    </ol>
  </div>

          </div>
      </div>

    <br>


<hr>
@endsection

@section('area3')
<div class="social_media">
          <ul>
            <li><a href="#" class="button"> Varify Now</a></li>
        </ul>
    </div>
  </div>
</div>
@endsection


@section('footer')
  @include('includes.footer')
@endsection
