@extends('layouts.app')

@section('title')
    IndicatorFx Signals | Login
@endsection

@section('link1')
    <link rel="stylesheet" type="text/css" href="{{asset('css/signup.css')}}">
@endsection

@section('area1')
    <div class="sign-up-form">
        <h1>Sign up</h1>
        <form method="POST" action="{{ route('register') }}">
            <input type="text" class="input-box @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="email" class="input-box @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="password" class="input-box @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="password" class="input-box" placeholder="Re-enter password" name="password_confirmation" required autocomplete="new-password">>
            <p><span><input type="checkbox"></span>I agree to your <a href="{{route('term')}}" target="_blank">Terms & conditons</a> and <a href="{{route('policy')}}" target="_blank">Privacy Policy</a></p>
            <button type="button" class="signup-btn">Create Account</button>
            <hr>
            <p>Have an account? <a href="#">Log in</a></p>


        </form>

    </div>
    <br>
    <hr>
    <div class="lower"></div>
@endsection

@section('area2')
    <button class="btn btn-danger btn-md" style="border-radius: 5em; width: 13%; margin-left: 43.3%; margin-top: -100px;"><i class="fab fa-google"></i> Login with Google</button>
    <button class="btn btn-primary btn-md" style="border-radius: 5em; width: 13%; margin-left: 43.3%; margin-top: -50px"><i class="fab fa-facebook-square"></i> Login with Facebook</button>
@endsection















@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
