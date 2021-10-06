@extends('layouts.app')

@section('title', 'Home')

@section('header')

    @include('partials.header')

@endsection

@section('content')
<section class="pt-130 pb-50 bg-dark-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme owl-btn-1 banner-slide" data-nav-arrow="false" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="mt-80">
                                        <h1 class="box-title text-white mb-20">250+ of the world’s most popular cryptocurrency markets</h1>
                                        <h4 class="text-white-80 fw-300 mb-30">Your access to the top coin markets. Capitalize on trends and trade with confidence through our expansive marketplace listings.</h4>
                                    </div>  
                                </div>
                                <div class="col-lg-6 col-12">                   
                                    <div class="text-center">
                                        <img src="../images/front-end-img/banners/graphic_carousel_generic.png" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="mt-80">
                                        <h1 class="box-title text-white mb-20">The more the merrier. Invite your friends and earn crypto.</h1>
                                    </div>  
                                    <div>
                                        <a href="index2.html#" class="btn btn-primary">Get started</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">                   
                                    <div class="text-center">
                                        <img src="../images/front-end-img/banners/graphic_carousel_referrals.png" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="mt-80">
                                        <h1 class="box-title text-white mb-20">Want Bitcoin? You got it.</h1>
                                        <h4 class="text-white-80 fw-300 mb-30">Instantly buy or sell Bitcoin with the click of a button.</h4>
                                    </div>  
                                    <div>
                                        <a href="index2.html#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">                   
                                    <div class="text-center">
                                        <img src="../images/front-end-img/banners/graphic_carousel_instant.png" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="box bg-dark box-body pull-up">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div class="tradingview-widget-container__widget"></div>
                          <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div>
                          <script type="text/javascript" src="../../../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                          {
                          "symbol": "BITSTAMP:BTCUSD",
                          "width": "100%",
                          "colorTheme": "dark",
                          "isTransparent": true,
                          "locale": "in"
                        }
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>          
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="box bg-dark box-body pull-up">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div class="tradingview-widget-container__widget"></div>
                          <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/ETHUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">ETHUSD Rates</span></a> by TradingView</div>
                          <script type="text/javascript" src="../../../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                          {
                          "symbol": "BITSTAMP:ETHUSD",
                          "width": "100%",
                          "colorTheme": "dark",
                          "isTransparent": true,
                          "locale": "in"
                        }
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>          
                </div>                                  
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="box bg-dark box-body pull-up">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div class="tradingview-widget-container__widget"></div>
                          <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/LTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">LTCUSDT Rates</span></a> by TradingView</div>
                          <script type="text/javascript" src="../../../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                          {
                          "symbol": "BINANCE:LTCUSDT",
                          "width": "100%",
                          "colorTheme": "dark",
                          "isTransparent": true,
                          "locale": "in"
                        }
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>          
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="box bg-dark box-body pull-up">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div class="tradingview-widget-container__widget"></div>
                          <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/XRPUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">XRPUSDT Rates</span></a> by TradingView</div>
                          <script type="text/javascript" src="../../../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                          {
                          "symbol": "BINANCE:XRPUSDT",
                          "width": "100%",
                          "colorTheme": "dark",
                          "isTransparent": true,
                          "locale": "in"
                        }
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>          
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-50 bg-dark3" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12">
                    <h1 class="mb-15 text-white text-center">Our mission is new technology <span class="text-success">trading with Bitcoin</span></h1>  
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-xl-3 col-md-6 col-12">
                    <a href="index2.html#" class="box bg-transparent">
                        <div class="box-body px-0">
                            <span class="text-primary fs-24"><i class="fa fa-money"></i></span>
                            <div class="fw-600 fs-18 mb-2 mt-5 text-white">How to Earn</div>
                            <div class="text-white-50 fs-16">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <a href="index2.html#" class="box bg-transparent">
                        <div class="box-body px-0">
                            <span class="text-primary fs-24"><i class="fa fa-share"></i></span>
                            <div class="fw-600 fs-18 mb-2 mt-5 text-white">Referral Money</div>
                            <div class="text-white-50 fs-16">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <a href="index2.html#" class="box bg-transparent">
                        <div class="box-body px-0">
                            <span class="text-primary fs-24"><i class="fa fa-weixin"></i></span>
                            <div class="fw-600 fs-18 mb-2 mt-5 text-white">Get Paid</div>
                            <div class="text-white-50 fs-16">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <a href="index2.html#" class="box bg-transparent">
                        <div class="box-body px-0">
                            <span class="text-primary fs-24"><i class="fa fa-thumbs-up"></i></span>
                            <div class="fw-600 fs-18 mb-2 mt-5 text-white">Become Our Partner</div>
                            <div class="text-white-50 fs-16">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                    </a>
                </div>
            </div>                      
        </div>
    </section>
    
    <section class="py-50 bg-dark-body" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <h1 class="mb-25 text-white">Powerful mining invest with<span class="text-success"> Safe & Secure</span></h1>
                    <p class="text-white-50 mb-50">We all have our own techniques, but one of the most effective techniques is to actually put some text where text goes and some pictures where pictures go to make sure everyone can see the vision you’ve created.</p>
                    <h5 class="fw-600 text-white">Estimated Mingin Digit</h5>
                    <h3 class="fw-600 text-white">10092050.0145 / BTC</h3>
                </div>
                <div class="col-md-6 col-12">
                    <div class="text-center">
                        <img src="../images/front-end-img/invest_ilust1.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>                                  
        </div>
    </section>
    
    <section class="py-50 bg-dark3" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="text-center">
                        <img src="../images/front-end-img/app.png" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <h1 class="mb-25 text-white">Protecting Investors<span class="text-success"> Interests</span></h1>
                    <p class="text-white-60 fw-600 fs-18 mb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p class="text-white-50 mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                </div>
            </div>                                  
        </div>
    </section>
    
    <section class="py-50 bg-dark-body" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <h1 class="mb-25 text-white">Stay in the know on <span class="text-success"> crypto</span></h1>
                    <p class="text-white-60 fs-18 mb-20">With a 24/7 support team, access to Poloniex Learn, and our global community, we have everything you need to become a crypto expert. </p>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="ms-0 ms-lg-50">
                                <div class="box bg-warning-light">
                                    <div class="box-body p-30">
                                        <h4 class="box-title fw-600">Get 24/7 Support</h4>
                                        <p class="mb-25 fs-18">You’ve got questions, we have answers. Reach out to our support team with any issues and we’ll help you resolve them as quickly as possible.</p>
                                        <a href="index2.html#" class="btn btn-warning">Contact Support</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box bg-success-light">
                                <div class="box-body p-30">
                                    <h4 class="box-title fw-600">Be Part of our Global Community</h4>
                                    <p class="mb-25 fs-18">Let’s stay in touch. Join our communities to keep up with the Poloniex team and our traders from across the world. From Twitter to Trollbox, you’ll find us talking all things crypto.</p>
                                    <div class="social-icons">
                                        <ul class="list-unstyled d-flex gap-items-1 justify-content-between">
                                            <li><a href="index2.html#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="index2.html#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="index2.html#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="index2.html#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="index2.html#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="index2.html#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-dribbble"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="index2.html#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-behance"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mt-0 mt-lg-50">
                                <div class="box bg-primary-light">
                                    <div class="box-body p-30">
                                        <h4 class="box-title fw-600">Don't Miss Poloniex News</h4>
                                        <p class="mb-25 fs-18">We’re always adding new features, listing new assets, and starting new campaigns. Sign up to stay updated with all things Crypto Admin.</p>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Email address">
                                            <button type="button" class="btn btn-primary btn-sm">Get Notified</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="me-0 me-lg-50">
                                <div class="box bg-info-light">
                                    <div class="box-body p-30">
                                        <h4 class="box-title fw-600">Catch up with Crypto Learn</h4>
                                        <p class="mb-25 fs-18">You’ve got questions, we have answers. Reach out to our support team with any issues and we’ll help you resolve them as quickly as possible.</p>
                                        <a href="index2.html#" class="btn btn-info">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                  
        </div>
    </section>
@endsection

@section('footer')

    @include('partials.footer')

@endsection