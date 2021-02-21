@extends('layouts.app')

@section('title')
  IndicatorFx Signals- Profitable Forex & Gold ntraday Signals on 15 minutes chart.
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@endsection

@section('link2')
  <link rel="stylesheet" type="text/css" href="{{asset('css/varify.css')}}">
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('area1')
<div id="varify" class="container-fluid">
<p>Check Your Email For Varification Link...</p>
<p style="color: #aaaaaa; font-size: 24px; font-family: Arial, Helvetica, sans-serif;">Did not receive an email?</p>
<button class="btn btn-primary btn-lg">Resend Email</button>
</div>
@endsection

@section('footer')
  @include('includes.footervarify')
@endsection
