@extends('layouts.user')

@section('title', 'Referral')

@section('header')

    @include('partials.user.header')

@endsection

@push('head-script')

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

@endpush

@section('content')

<section id="section-refer" class="section-refer container">
                <div class="refer-inner">
                    <div class="refer-board mb-3">
                        <h3 class="text-white">Refer your friend</h3>
                        <p>Send your Coinclock link to your family, friends and followers. Get paid when they join. Earn <span class="text-success">$10</span> on their first deposit.</p>
                        <div class="form-group has-icon">
                            <input type="link" class="form-control" value="{{ route('home') . '/invite/' . auth()->user()->username }}" readonly="true" />
                            <button type="button" class="btn btn-primary icon-right"><i class="feather-copy"></i></button>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6 col-12">
                            <div class="card-stack">
                                <div class="icon-case primary me-3">
                                    <i class="feather-package"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Refer Bonus</h5>
                                    <p class="sub-title">${{ $refer_bonuses }} <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#confirmWithdrawal">withdraw</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card-stack">
                                <div class="icon-case danger me-3">
                                    <i class="feather-users"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Referrals</h5>
                                    <p class="sub-title">{{ count(auth()->user()->referrals) }} Users</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
    
@endsection

@section('footer')
    
    @include('partials.user.footer')

@endsection

@section('extra-content')

<div id="confirmWithdrawal" class="section-modal modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Confirm Withdrawal</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            @if ($refer_bonuses > 50)
                            <form>
                                <div class="row gy-4 gx-3">
                                    <div class="col-12">
                                        <select id="asset-type" class="form-selectf sform-select-lg">
                                            @foreach($assets as $asset)
                                                <option value="{{ $asset->sort_name }}" data-icon="{{ asset('img/asset/' . $asset->name .'.png') }}">{{ $asset->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn primary-btn w-100" data-bs-toggle="modal" data-bs-target="#confirmSend">Proceed</button>
                                    </div>
                                </div>                
                            </form>
                            @endif

                            @if ($refer_bonuses < 50)
                                <p>Nothing to withdraw. Amount less than $50</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">close</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div> 

@endsection

@push('body-script')

<script src="{{ asset('js/custom-selectbox.js') }}"></script>

<script type="text/javascript">
    $('#asset-type').IconSelectBox(true);
</script>
    
@endpush