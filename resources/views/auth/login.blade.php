@extends('layouts.user')

@section('title', 'Sign In')

@section('content')
<div class="section-auth container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12 m-auto">
                    <div class="auth-header mb-3">
                        <p class="mx-auto"><img src="{{ asset('img/favicon.png') }}" class="img-fluid" /></p>
                        <h3>Sign in to your account</h3>
                        <p>Or <a href="{{ url('/register') }}" class="text-primary">create your account</a></p>
                    </div>                    
                    <form class="auth-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="email" class="mb-1">{{ __('Email') }}</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="password" class="mb-1">{{ __('Password') }}</label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-primary">{{ __('Forgot password?') }}</a>
                                @endif
                            </div>

                            <div class="col-12">
                                <button type="sumbit" class="btn primary-btn w-100 mt-3">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
