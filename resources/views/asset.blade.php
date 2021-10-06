@extends('layouts.user')

@section('title', 'Asset')

@section('header')

    @include('partials.user.header')

@endsection

@section('content')

<section id="section-asset-overview" class="section section-asset-overview">
                <div class="container">
                    <h3 class="asset-value">$0.00</h3>
                    <h5 classs="title">Multi-Coin Wallet</h5>
                </div>
            </section>

            <section id="section-asset-call" class="section section-asset-call">
                <div class="container">
                    <div class="row g-3">
                        @foreach($assets as $asset)
                        <div class="col-md-6">
                            <a href="{{ url('/wallet'. '/' . $asset->sort_name) }}">
                                <div class="asset">
                                    <div class="left">
                                        <img src="{{ asset('img/asset/'. $asset->name . '.png') }}" class="asset-icon" />
                                        <h5 class="asset-name">{{ $asset->name }}</h5>
                                    </div>
                                    <div class="right">
                                        <h3 class="asset-value">$0.00</h3>
                                        <span class="asset-amount">0.0000 {{ $asset->sort_name }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

@endsection

@section('footer')
    
    @include('partials.user.footer')

@endsection