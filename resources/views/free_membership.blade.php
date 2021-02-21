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
         <h3>Free Membership</h3>
         <div class="info_data">

           <div class="catagories">
   <h2>Catagories</h2>
   <ul>
     <li>Catagory 1</li>
     <li>Catagory 2</li>
     <li>Catagory 3</li>
     <li>Catagory 4</li>
   </ul>
 </div>

         </div>
     </div>

     <br>


<hr>
@endsection

@section('area3')
<div class="social_media">
  <ul>
    <li><a href="#" class="button"><i class="fab fa-telegram-plane"></i> Telegram</a></li>
    <li><a href="#" class="button" style="background: #fff; color: #ff6600; border: 1px solid #ff6600"> Premium Plans</a></li>
</ul>
</div>
</div>
</div>
@endsection

@section('footer')
  @include('includes.footer')
@endsection
