@extends('layouts.user')

@section('title', 'Send')

@section('back_link', route('user.asset'))

@section('header')

    @include('partials.user.headerTwo')

@endsection

@push('head-script')

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

@endpush

@section('content')

<section id="section-wallet-send" class="section section-wallet-send h-100">
                <div class="container h-100">
                    <form class="d-flex align-content-between flex-wrap h-100">
                        <div class="row gy-4 gx-3 w-100">
                            <div class="col-12">
                                <select id="asset-type">
                                    @foreach($assets as $asset)
                                        <option value="{{ $asset->sort_name }}" data-icon="{{ asset('img/asset/' . $asset->name .'.png') }}">{{ $asset->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" id="recipient" class="form-control" placeholder="Enter receiver address">
                                    <label for="recipient">Receiver Address</label>
                                </div>
                            </div>                            
                            <div class="col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" id="amount" class="form-control" placeholder="Enter Amount to send" value="0.0000">
                                    <label for="amount">Amount Bitcoin</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="text-danger">Important</span>
                                <ul class="ul">
                                    <li><span class="sub">Minimum Crypto you can send should not be less than <span class="text-success">$10</span> worth, crypto transfer below the allowed minimum would not be accepted.</span></li>
                                    <li><span class="sub">Only send to a valid BTC address. Sending to a wrong address may result in the loss of your crypto</span></li>                            
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="btn primary-btn w-100" data-bs-toggle="modal" data-bs-target="#confirmSend">Proceed</button>
        
                    </form>
                </div>
            </section>

@endsection

{{-- @section('footer')
    
    @include('partials.user.footer')

@endsection --}}

@section('extra-content')

<div id="confirmSend" class="section-modal modal fade" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Confirm</h5>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to proceed transfer

                        <div class="d-flex justify-content-center mt-4">
                            <button type="button" class="btn btn-secondary m-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary m-3">Send</button>
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