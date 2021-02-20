@extends('layouts.app')

@section('title')
  IndicatorFx Signals- Pricing
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/pricing.css')}}">
@endsection

@section('link2')
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@endsection

@section('header')
    @include('includes.header_al')
@endsection

@section('area1')
<!-- PAGE WRAPPER -->
<div class="blocks">
<h1 style="text-align:center" style="font-style: bold; font-family:normal 70px 'Cookie', cursive;">Plans &amp; Pricing</h1>
<p style="text-align:center">Resize the browser window to see the effect.</p>

<div class="boxes">
<div class="columns">
<ul class="price">
  <li class="header">Premium 1 Month</li>
  <li class="grey">$ 50.00</li>
  <li>Short term signals</li>
  <li>4 to 6 Signals per day*</li>
  <li>Telegram live alerts</li>
  <li>Accuracy: almost 85%</li>
  <li>1500 to 3000 Pips per month</li>
  <li>3 Take profits per signal</li>
  <li>No manual close</li>
  <li>Signals time: Asia, London & USA</li>
  <li>Signals for currencies & gold</li>
  <li>Risk management advice</li>
  <li class="grey"><a href="#" class="button">Select</a></li>
</ul>
</div>
@endsection

@section('area2')
<div class="columns">
<ul class="price">
  <li class="header" style="background-color:#ff7214;">Premium 3 Month</li>
  <li class="grey">$ 100.00</li>
  <li>Short term signals</li>
  <li>4 to 6 Signals per day*</li>
  <li>Telegram live alerts</li>
  <li>Accuracy: almost 85%</li>
  <li>1500 to 3000 Pips per month</li>
  <li>3 Take profits per signal</li>
  <li>No manual close</li>
  <li>Signals time: Asia, London & USA</li>
  <li>Signals for currencies & gold</li>
  <li>Risk management advice</li>
  <li class="grey"><a href="#" class="button">Select</a></li>
</ul>
</div>
@endsection

@section('area3')
<div class="columns">
<ul class="price">
  <li class="header">Premium 6 Month</li>
  <li class="grey">$ 150.00</li>
  <li>Short term signals</li>
  <li>4 to 6 Signals per day*</li>
  <li>Telegram live alerts</li>
  <li>Accuracy: almost 85%</li>
  <li>1500 to 3000 Pips per month</li>
  <li>3 Take profits per signal</li>
  <li>No manual close</li>
  <li>Signals time: Asia, London & USA</li>
  <li>Signals for currencies & gold</li>
  <li>Risk management advice</li>
  <li class="grey"><a href="#" class="button">Select</a></li>
</ul>
</div>
</div>
</div>

<br>
<hr>
@endsection

@section('footer')
  @include('includes.footer')
@endsection
