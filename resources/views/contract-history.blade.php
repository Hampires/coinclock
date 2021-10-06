@extends('layouts.user')

@section('title', $asset->name)

@section('back_link', route('user.asset'))

@section('header')

    @include('partials.user.headerTwo')

@endsection

@section('content')

<section id="section-wallet-overview" class="section section-wallet-overview">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h5 class="asset-name">{{ $asset->name }}</h5>
                        <p class="asset-price">$0</p>
                    </div>
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <img class="asset-icon" src="{{ asset('img/asset/' . $asset->name .'.png') }}" />
                        </div>
                        <p class="asset-amount">0.0000 {{ $asset->sort_name }}</p>
                        <p class="asset-value">= $0.00</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn wallet-action-btn" data-bs-toggle="modal" data-bs-target="#alertWallet">Send</button>
                        <button class="btn wallet-action-btn" data-bs-toggle="modal" data-bs-target="#alertWallet">Receive</button>
                    </div>
                </div>
            </section>

            <section id="section-wallet-history" class="section-wallet-history">
                @if(!count($transactions) > 0)
                    <div class="no-wallet-history">
                        <i class="icon lni lni-money-protection"></i>
                        <h5 class="text">Transactions will appear here</h5>
                    </div>
                @endif

                @if(count($transactions) > 0)
                    <div class="wallet-history">
                        <h5 class="title">Transaction History</h5>
                        @foreach($transactions as $transaction)
                            <div class="history-transaction">
                                @if(!$transaction->from_owner == auth()->user()->email)
                                    <div class="left">
                                        <i class="lni lni-download"></i>
                                        <div class="left-inner">       
                                            <h5 class="transaction-type">{{ __('Received') }}</h5>
                                            <span class="transaction-fromandto">From: {{ $transaction->sender }}</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <h3 class="asset-amount">+{{ $transaction->amount }} {{ $transaction->asset }}</h3>
                                    </div>
                                @endif

                                @if($transaction->from_owner == auth()->user()->email)
                                    <div class="left">
                                        <i class="lni lni-download"></i>
                                        <div class="left-inner">       
                                            <h5 class="transaction-type">{{ __('Sent') }}</h5>
                                            <span class="transaction-fromandto">To: {{ $transaction->receiver }}</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <h3 class="asset-amount sent">-{{ $transaction->amount }} {{ $transaction->asset }}</h3>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>

@endsection

@section('extra-content')

<div id="alertWallet" class="section-modal modal fade" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Alert</h5>
                    </div>
                    <div class="modal-body">
                        <p>Unlock {{ strtoupper($asset->sort_name) }} wallet by investing in any contract. Select "Tick Contract" to start a contract.</p>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
