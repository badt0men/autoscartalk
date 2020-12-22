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
                                <input class="form-control inputBox" type="text" id="vin" name="vin" maxlength="17" placeholder="ENTER THE VIN" required>
                                <a> <span class="smallTxt" id="testvin" onclick="change()"><small>Want to test with a random VIN? </small></span></a>
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
                        <p class="lead">As part of our giveback to the community, Autos & Cartalk provides basic free VIN check report to the public to determine the vehicle is a lemon, salvaged or has flooded condition. We also provide historical mileage/sales records for free! No credit card required!</p>
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-md-7">
                    <div class="col-12 col-md-5">
                        <h2 class="font-weight-bolder mb-4">Why check you VIN?</h2>
                        <p class="lead">It’s very important to know car history when you are buying a vehicle on the secondary market. Car history check is a must - especially with such a large used car market in Nigeria. The likelihood of buying a car after an accident, fire, flood or crime is very high. Vehicle information will help you avoid problems.</p>
                        <p class="lead">Want a free consultation from the experts of Autos & Cartalk?</p>
                        <a href="mailto:info@autosandcartalk.com" class="btn btn-primary mt-3 animate-up-2">
                            Get in touch with us
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
                <h2 class="mb-4">Want a clean title, non-salvage vehicle?</h2>
                <p class="lead mb-5">Join over <span class="font-weight-bolder">3,000+</span> buyers</p>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="car-hyundai"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="car-infiniti"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="car-audi"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3 ">
                    <i class="car-lexus"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="car-chevrolet"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray">
                    <i class="car-toyota"></i>
                </a>
            </div>
            <div class="col-12 text-center">
                <!-- Button Modal -->
                <a href="https://ijamautos.com" target="_blank" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Visit IJAM Autos</a>
            </div>
        </div> 
    </div>    
</section>


@endsection
<script>

function change(){
const vin = ['SCBFR7ZA5CC072256', 'WBA5B3C50GG252337', '5TENX22N76Z245036', '3GCCW80H7FS924470', 'KM8SC13D94U638617'];
const random = Math.floor(Math.random() * vin.length);
const randvalue = vin[random];
document.getElementById('vin').value = randvalue;
}
       

</script>