<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  @yield('link1')
  @yield('link2')
  @yield('link3')
  @yield('link4')
  @yield('link5')

</head>

<body>

  @yield('header')

  @yield('area1')

  @yield('area2')

  @yield('area3')

  @yield('area4')

  @yield('area5')

  @yield('area6')

  @yield('area7')

  @yield('footer')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
