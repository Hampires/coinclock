@extends('layouts.user')

@section('title', 'Email Verify')

@section('content')
<div class="section-auth container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="auth-form">
                <div class="verification-header">
                    <h5 class="text-white">{{ __('Verify Your Email Address') }}</h5>
                </div>

                <div class="verification-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                
                    <form class="d-block mt-4" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn primary-btn align-baseline text-capitalize px-5">{{ __('Resend verification link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
