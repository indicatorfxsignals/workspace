@extends('layouts.app')

@section('title')
  IndicatorFx Signals | Support
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/contacts.css')}}">
@endsection

@section('link2')
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@endsection

@section('header')
    @include('includes.header_al')
@endsection

@section('area1')
<div class="contact-form">
 <h1>Contacts</h1>
 <p>Feel free to drop your question down below</p>
<form>
   <input type="name" class="input-box" placeholder="First name"> <input type="name" class="input-box" placeholder="Last name">
   <input type="email" class="email-input-box" placeholder="Email">
   <input type="message" class="textarea" placeholder="Type your message here">
   <button type="button" class="submit-btn">Submit</button>

 </form>
 <br><br>
 <p>We will try to reach you as soon as possible!</p>
</div>
@endsection

@section('footer')
  @include('includes.footer')
@endsection
