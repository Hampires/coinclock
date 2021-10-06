@extends('layouts.user')

@section('title', 'Receive')

@section('back_link', route('user.asset'))

@section('header')

    @include('partials.user.headerTwo')

@endsection

@push('head-script')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

@endpush

@section('content')

<section id="section-wallet-receive" class="section section-wallet-receive h-100">
                <div class="container">
                    <form>
                        <div class="row gy-4 gx-3 align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="balance" class="mb-1">Coinclock Wallet</label>
                                    <input type="text" id="balance" class="form-control" value="0.0000" readonly="true" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="mb-1">Payment Asset</label>
                                <select id="asset-type" class="form-selectf sform-select-lg">
                                    @foreach($assets as $asset)
                                        <option value="{{ $asset->sort_name }}" data-icon="{{ asset('img/asset/' . $asset->name .'.png') }}">{{ $asset->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="address" class="mb-1">Deposit Address</label>
                                    <input type="text" id="address" class="form-control" value="TRd56hjdSAjjkdkd0jr89ejncJdk44" readonly="true" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <button type="button" class="btn btn-flat text-success mt-4">Copy Address</button>
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="text-danger">Important</span>
                                <ul class="ul">
                                    <li><span class="sub">Minimum BTC you can receive should not be less than <span class="text-success">$10</span> worth, crypto transfer below the allowed minimum would not be accepted.</span></li>
                                    <li><span class="sub">Only send to this deposit address. Sending to a wrong address may result in the loss of your deposit.</span></li>                            
                                </ul>
                            </div>
                        </div>
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