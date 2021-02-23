@extends('layouts.app')

@section('title')
  IndicatorFx Signals | FAQ
@endsection

@section('link1')
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@endsection

@section('link2')
  <link rel="stylesheet" type="text/css" href="{{asset('css/faq.css')}}">
@endsection

@section('header')
  @include('includes.header')
@endsection

@section('area1')
<div class="container">
<div class="accordion-header">
  <h2>FAQ's</h2>
  <p>Browse through these FAQs to find answers to commonly raised questions.</p>
</div>
@endsection

@section('area2')
<button class="accordion">Why join us?</button>
<div class="panel">
<p>-We try to provide all the support to our investors/customers</p>
</div>
@endsection

@section('area3')
<button class="accordion">How do I open an account?</button>
<div class="panel">
  <p>-You can apply for an account with <a href="#">Indicatorfxsignals.com</a> online. <a href="#">Start your application now</a>.</p>
</div>
@endsection

@section('area4')
<button class="accordion">I forgot my password or username. How can I retrieve them?</button>
<div class="panel">
  <p>-If you forgot your username, please <a href="#">contact us</a> for assistance. If you forgot your password, please <a href="#">click here</a> to request your password.</p>
</div>
@endsection

@section('area5')
<button class="accordion">What information do I need to provide when opening an account?</button>
<div class="panel">
  <p>-We will need you to provide us with your name and address to establish your identity.</p>
</div>
@endsection

@section('area6')
<button class="accordion">How do I cancel my subscription?</button>
<div class="panel">
  <p>-There is no need to cancel it. Subscriptions are not automatically renewed, therefore you won't be charged unless you wish to continue and pay again. </p>
</div>

</div>

<div class="lower"></div>
<!-- PAGE WRAPPER END -->
@endsection

@section('footer')
  @include('includes.footer')
  <script src="{{asset('js/faq.js')}}"></script>
@endsection
