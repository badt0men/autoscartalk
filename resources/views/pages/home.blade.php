@extends('layouts/master')

@section('content')

<div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <div class="loader-element">
        <span class="loader-animated-dot"></span>
        <img src="{{asset ('assets/img/brand/AutosAndCarsTalkLOGO1.svg')}}" height="80" alt="Impact logo">
    </div>
</div>

        <!-- Hero -->
        <section class="section-header pb-7 pb-lg-11 bg-soft">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 order-2 order-lg-1">
                    <img src="{{asset ('assets/img/illustrations/undrawhome.svg')}}" alt="">
                    </div>
                    <div class="col-12 col-md-5 order-1 order-lg-2">
                          <h1 class="display-2 mb-3">Research any vehicle by VIN Number for free.</h1>
                          <p class="lead">Autos & Cartalk brings you the best, hassle-free and simple solutions to everything automobile.</p>
                          <div class="mt-4">
                            <form action="/" method="POST" class="d-flex flex-column mb-5 mb-lg-0">
                                @csrf
                                <input class="form-control inputBox" type="text" name="vin" maxlength="17" placeholder="ENTER THE VIN" required>
                                <br />
                                <button class="btn btn-primary" type="submit">Check the VIN</button>
                                <div class="form-group form-check mt-3">
                                </div>
                            </form>
                          </div>
                      </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>
        <section class="section section-lg pt-6">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="h1 font-weight-bolder mb-4">Meet our intuitive platform</h2>
                        <p class="lead">Self-Service Analytics or ad hoc reporting gives users the ability to develop rapid reports, empowering users to analyze their data.</p>
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-md-7">
                    <div class="col-12 col-md-5">
                        <h2 class="font-weight-bolder mb-4">Site Audit</h2>
                        <p class="lead">Site Audit crawls all the pages it finds on your website – then provides an overall SEO health score, visualises key data in charts, flags all possible SEO issues and provides recommendations on how to fix them.</p>
                        <p class="lead">Have a huge website? Not an issue.</p>
                        <a href="./about.html" class="btn btn-primary mt-3 animate-up-2">
                            Learn More
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <img src="{{asset('assets/img/illustrations/feature-illustration.svg')}}" alt="">
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <section class="section section-lg pb-5 bg-soft">
    <div class="container">
        <div class="row"> 
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Faster growth starts with Impact</h2>
                <p class="lead mb-5">Join over <span class="font-weight-bolder">300,000+</span> users</p>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-mailchimp"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-cpanel"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-dhl"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3 ">
                    <i class="fab fa-github-alt"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-aws"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray">
                    <i class="fab fa-node"></i>
                </a>
            </div>
            <div class="col-12 text-center">
                <!-- Button Modal -->
                <a href="/" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Start 30-days trial</a>
            </div>
        </div> 
    </div>    
</section>


@endsection
<script>
    $(document).ready(function(){
       

    });
</script>