@extends('layouts.user')

@section('title', 'Sign Up')

@section('content')
<div class="section-auth container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12 m-auto">
                    <div class="auth-header mb-3">
                        <p class="mx-auto"><img src="{{ asset('img/favicon.png') }}" class="img-fluid" /></p>
                        <h3>Create your account</h3>
                        <p>Or <a href="{{ url('/login') }}" class="text-primary">login your account</a></p>
                    </div>                    
                    <form class="auth-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="firstname" class="mb-1">{{ __('Firstname') }}</label>
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" autocomplete="firstname" autofocus />

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="lastname" class="mb-1">{{ __('Lastname') }}</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus />

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="password-confirm" class="mb-1">{{ __('Confirm Password') }}</label>
                                <input type="password" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" autocomplete="new-password" />
                            </div>
                            <div class="col-12">
                                <button type="sumbit" class="btn primary-btn w-100 mt-3">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
