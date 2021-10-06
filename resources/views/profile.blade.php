@extends('layouts.user')

@section('title', 'Profile')

@section('header')

    @include('partials.user.header')

@endsection

@push('head-script')

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

@endpush

@section('content')

<section id="section-profile-settings" class="section section-profile-settings">
                <div class="settings-panel">
                    <div class="row settings-item">
                        <div class="col-md-3 col-12 left">
                            <h3><i class="lni lni-user"></i>Profile Information</h3>
                        </div>
                        <div class="col-md-9 col-12 right">
                            <form id="profile_update" method="POST" action="{{ route('user.profile.update') }}">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="row gy-3">
                                            <div class="col-md-6 col-12">
                                                <label for="firstname" class="mb-1">{{ __('Firstname') }}</label>
                                                <input type="text" id="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" />

                                                @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="lastname" class="mb-1">{{ __('Lastname') }}</label>
                                                <input type="text" id="lastname" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" />

                                                @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="email" class="mb-1">{{ __('Email') }}</label>
                                        <input type="email" id="email" class="form-control" value="{{ $user->email }}" readonly="true" />
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-auto col-12">
                                                <button type="submit" class="btn primary-btn">Save</button>

                                                <span class="profile-update-message ms-3"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row settings-item">
                        <div class="col-md-3 col-12 left">
                            <h3><i class="lni lni-lock-alt"></i>Change Password</h3>
                        </div>
                        <div class="col-md-9 col-12 right">
                            <form id="password_change" method="POST" action="{{ route('user.password.update') }}">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6 col-12">
                                        <label for="password" class="mb-1">Current Password</label>
                                        <input type="password" id="password" class="form-control" name="password" />
                                    </div>
                                    <div class="col-12">
                                        <div class="row gy-3">
                                            <div class="col-md-6 col-12">
                                                <label for="new_password" class="mb-1">New Password</label>
                                                <input type="password" id="new_password" class="form-control" name="new_password" />
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="confirm_password" class="mb-1">Confirm Password</label>
                                                <input type="password" id="confirm_password" class="form-control" name="confirm_password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-auto col-12">
                                                <button type="submit" class="btn primary-btn">Update</button>

                                                <span class="password-change-message ms-3"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row settings-item">
                        <div class="col-md-3 col-12 left">
                            <h3><i class="lni lni-tshirt"></i>Interface Mode</h3>
                        </div>
                        <div class="col-md-9 col-12 right">
                            <h5>Change Theme</h5>
                            <div class="d-flex justify-content-between">
                                <p>Toggle between Light/Dark theme beauty interface</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="theme_toggler" checked disabled="true" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row settings-item">
                        <div class="col-md-3 col-12 left">
                            <h3><i class="lni lni-control-panel"></i>Contract History</h3>
                        </div>
                        <div class="col-md-9 col-12 right">
                            <div class="d-flex justify-content-between">
                                <p>Check out your contract history with Coinclock</p>
                                <a href="{{ route('user.contract.history') }}">view all</a>
                            </div>
                        </div>
                    </div>
                    <div class="row settings-item">
                        <div class="col-md-3 col-12 left">
                            <h3></h3>
                        </div>
                        <div class="col-md-9 col-12 right">
                            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmLogout">Logout</button>
                        </div>
                    </div>
                </div>
            </section>

@endsection

@section('footer')
    
    @include('partials.user.footer')

@endsection

@section('extra-content')

<div id="confirmLogout" class="section-modal modal fade" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Confirm Logout</h5>
                    </div>
                    <div class="modal-body">
                        This process will end your user session. Do you want to continue?

                        <div class="d-flex justify-content-center mt-4">
                            <button type="button" class="btn btn-secondary m-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" onclick="{{ 'goTo(\'' . route('user.logout') . '\')' }}" class="btn btn-primary m-3">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@push('body-script')

<script src="{{ asset('js/custom-selectbox.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#profile_update').submit(function(e) {
            e.preventDefault();
            let url = e.target.getAttribute('action');
            let form = new FormData(e.target);
            $.ajax({
                url: url,
                type: 'post',
                data: $('#' + e.target.id).serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        $('#' + e.target.id + ' .profile-update-message').addClass('text-success')
                        $('#' + e.target.id + ' .profile-update-message').text(response.message);
                    } else {
                        $('#' + e.target.id + ' .profile-update-message').addClass('text-danger')
                        $('#' + e.target.id + ' .profile-update-message').text(response.message);
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });

        $('#password_change').submit(function(e) {
            e.preventDefault();
            let url = e.target.getAttribute('action');
            let form = new FormData(e.target);
            $.ajax({
                url: url,
                type: 'post',
                data: $('#' + e.target.id).serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        $('#' + e.target.id + ' .password_change-message').addClass('text-success')
                        $('#' + e.target.id + ' .password-change-message').text(response.message);
                    } else {
                        $('#' + e.target.id + ' .password-change-message').addClass('text-danger')
                        $('#' + e.target.id + ' .password-change-message').text(response.message);
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });
    });
</script>
    
@endpush
