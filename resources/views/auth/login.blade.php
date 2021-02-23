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
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input class="un @error('email') is-invalid @enderror" type="email" align="center" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus/>
                @error('email')
                    <p class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            <input class="pass @error('password') is-invalid @enderror" type="password" align="center" name="password" placeholder="Password" required autocomplete="current-password"/>
                @error('password')
                    <p class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror

            <div align="center">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <button class="submit" align="center">Sign in</button>
                @if (Route::has('password.request'))
                    <p class="forgot" align="center" style="padding-bottom: 10px;"><a href="{{route('password.request')}}">Forgot Password?</a></p>
                @endif
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
