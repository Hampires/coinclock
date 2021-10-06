@extends('layouts.user')

@section('title', 'Dashboard')

@section('header')

    @include('partials.user.header')

@endsection

@push('head-script')

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

@endpush

@section('content')

<section id="section-overview" class="section section-overview">
                <div class="container-fluid my-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="overview-action col-6">
                                    <h3 class="title">Total Ticks</h3>
                                    <p>
                                        @if(count(auth()->user()->contracts) > 0)
                                            <span class="value">{{ auth()->user()->contracts[0]->balance - auth()->user()->contracts[0]->capital }}</span>
                                            {{ auth()->user()->contracts[0]->asset }}
                                        @endif
                                        @if(!count(auth()->user()->contracts) > 0)
                                            <span class="value">0.0000</span>
                                            {{ strtoupper($assets[0]->sort_name) }}
                                        @endif
                                    </p>
                                </div>
                                <div class="overview-action col-6">
                                    <h3 class="title">Total Balance</h3>
                                    <p>
                                        @if(count(auth()->user()->contracts) > 0)
                                            <span class="value">{{ auth()->user()->contracts[0]->balance }}</span>
                                            {{ auth()->user()->contracts[0]->asset }}
                                        @endif
                                        @if(!count(auth()->user()->contracts) > 0)
                                            <span class="value">0.0000</span>
                                            {{ strtoupper($assets[0]->sort_name) }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="overview-item col-6">
                                    <h3 class="title">Tick Capital</h3>
                                    <p>
                                        @if(count(auth()->user()->contracts) > 0)
                                            <span class="value">{{ auth()->user()->contracts[0]->capital }}</span>
                                            {{ auth()->user()->contracts[0]->asset }}
                                        @endif
                                        @if(!count(auth()->user()->contracts) > 0)
                                            <span class="value">0.0000</span>
                                            {{ strtoupper($assets[0]->sort_name) }}
                                        @endif
                                    </p>
                                </div>
                                <div class="overview-item col-6">
                                    <h3 class="title">Tick Level</h3>
                                    <p>
                                        @if(count(auth()->user()->contracts) > 0)
                                            <span class="value">{{ auth()->user()->contracts[0]->ticked }}</span>
                                        @endif
                                        @if(!count(auth()->user()->contracts) > 0)
                                            <span class="value">0</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="row g-3">
                                <div class="col-md-6 text-center">
                                    <button class="btn success-btn rounded w-75" data-bs-toggle="modal" data-bs-target="#confirmWithdrawal">Withdraw</button>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button class="btn primary-btn w-75" data-bs-toggle="modal" data-bs-target="#confirmDeposit">Tick Contract</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-action-call" class="section section-action-call">
                <div class="container">
                    <div class="row gy-5 gx-3">
                        <div class="col-md-6">
                            <a href="#">
                                <div class="action">
                                    <div class="call-icon">
                                        <i class="lni lni-money-protection"></i>
                                    </div>
                                    <div class="right">
                                        <span>Coinclock</span>
                                        <h3>Contract Invest</h3>
                                    </div>
                                    <div class="action-footer">
                                        <p>Tick now</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#confirmWithdrawal">
                                <div class="action">
                                    <div class="call-icon">
                                        <i class="lni lni-money-protection"></i>
                                    </div>
                                    <div class="right">
                                        <span>Coinclock</span>
                                        <h3>Contract Withdrawal</h3>
                                    </div>
                                    <div class="action-footer">
                                        <p>WITHDRAW TICKED CONTRACT</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('user.asset') }}">
                                <div class="action">
                                    <div class="call-icon">
                                        <i class="lni lni-money-protection"></i>
                                    </div>
                                    <div class="right">
                                        <span>Coinclock</span>
                                        <h3>Crypto Wallet</h3>
                                    </div>
                                    <div class="action-footer">
                                        <p>Receive Crypto</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('user.referral') }}">
                                <div class="action">
                                    <div class="call-icon">
                                        <i class="lni lni-money-protection"></i>
                                    </div>
                                    <div class="right">
                                        <span>Coinclock</span>
                                        <h3>Referral Bonus</h3>
                                    </div>
                                    <div class="action-footer">
                                        <p>Claim Referral bonus</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    
@endsection

@section('footer')
    
    @include('partials.user.footer')

@endsection

@section('extra-content')

<div id="confirmWithdrawal" class="section-modal modal fade" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Confirm Withdrawal</h5>
                    </div>
                    <div class="modal-body">
                        @if (count(auth()->user()->contracts) > 0 && auth()->user()->contracts[0]->ticked > 30)

                            This procees wiil withdraw your contract funds to your Coiclock wallet. Do you want to continue?

                            <div class="d-flex justify-content-center mt-4">
                                <button type="button" class="btn btn-secondary m-3" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary m-3">Withdraw</button>
                            </div>
                        @endif

                        @if (!count(auth()->user()->contracts) > 0)
                            <p>Nothing to withdraw. Select "Tick Contract" to start a contract.</p>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">close</button>
                            </div>
                        @endif

                        @if (count(auth()->user()->contracts) > 0 && auth()->user()->contracts[0]->ticked <= 30)
                            <p>Can't make withdrawal. Tick level less than 30.</p>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">close</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>  


<div id="confirmDeposit" class="section-modal modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Contract Deposit</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
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
                                        <div class="form-group">
                                            <label for="contract_address" class="mb-1">Contract Address</label>
                                            <input type="text" id="contract_address" class="form-control" name="contract_address" readonly="true" />
                                            <span id="contract_address_feedback" class="invalid-feedback" role="alert">
                                                <strong></strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="wallet_address" class="mb-1">Sending Address</label>
                                            <input type="text" id="wallet_address" class="form-control" name="wallet_address" placeholder="Enter address you're sending from" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="amount" class="mb-1">Amount</label>
                                            <input type="text" id="amount" class="form-control" name="amount" placeholder="Enter amount you want to send" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="text-danger">Important</span>
                                        <ul class="ul">
                                            <li><span class="sub">Only send <span id="asset_sort_name"></span> from the sending address. Sending from a wrong address or amount may result in the loss of your deposit.</span></li>
                                            <li><span class="sub">Transaction will be cancelled after 24 hours of no deposit action.</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn primary-btn w-100" data-bs-toggle="modal" data-bs-target="#confirmSend">Create Transaction</button>
                                    </div>
                                </div>                
                            </form>
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
        $('#asset-type').IconSelectBox(true);
        //console.log($('.asset-type-select-box li').dataset);

        function set_asset_contents(asset) {
            $('#asset_sort_name').each(function(index, obj) {
                $(this).text(asset.toUpperCase());
            });

            $.ajax({
                url: '/get/contract/address',
                type: 'post',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'asset': asset
                },
                success: function(response) {
                    console.log($('#contract_address_feedback strong'));
                    if (response.length == 0) {
                        $('#contract_address').val('');
                        $('#contract_address').addClass('is-invalid');
                        $('#contract_address_feedback strong').text('No contract available for ' + asset.toUpperCase() + '. Contact support for other Payment options');
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            })
        }

        set_asset_contents($('#asset-type').val());

        $('#asset-type').change(function(e) {
            set_asset_contents(e.target.value);
        });
    });
</script>
    
@endpush