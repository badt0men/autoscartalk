@extends('layouts/master')

@section('content')
<div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <div class="loader-element">
        <span class="loader-animated-dot"></span>
        <img src="{{asset ('assets/img/brand/AutosAndCarsTalkLOGO1.svg')}}" height="80" alt="Impact logo">
    </div>
</div>

<section class="section-header pb-6 pb-lg-10 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-1 mb-4">VIN Information Availability</h1>
                <div style="display: inline-flex;">
                    <div style="padding-right:10px;"><a href="#"><small class="text-muted">What is the VIN? </small></a></div>
                    <div style="padding-left:10px;"><a href="#"><small class="text-muted">Where can you find it?</small></a></div>
                    <br>

                </div>
                
                <div class="vinTitle">
                    <br>
                    <h1 style="text-transform: uppercase;"><?php 
                    if(!empty($data->vin)){
                        echo $data->vin;
                    }else{
                        echo $vinNum;
                    } ?></h1>
                </div>
                <?php
                    $successImage = '"https://images.vexels.com/media/users/3/157932/isolated/preview/951a617272553f49e75548e212ed947f-curved-check-mark-icon-by-vexels.png"';
                    $simg = "<img src=$successImage  width='18px'/>";  

                    $errorImage = '"https://sterlingpropertysolutions.co.uk/wp-content/uploads/2019/01/Red-Cross-PNG-Clipart-300x257.png"';
                    $eimg = "<img src=$errorImage  width='15px'/>";  
                    
                    if($data->success){
                        echo $simg . '<p style="color:#75bb48; font-weight:900;">VIN Found</p>';
                    }else{
                        echo $eimg . ' <p style="color:#f81104; font-weight:900;">VIN Not Found</p>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>


<section class="section section-lg bg-soft">
<div class="container">
<div class="row">
    <div class="col-12 col-lg-8">
        <h2 class="h1 font-weight-light mb-3"><strong>Open source</strong> project</h2>
        <p class="lead mb-4">Impact design system is an open source project featuring premium components, front pages and a dashboard. There's also a Pro version available with more components, pages and plugins.</p>
        <div class="d-flex align-items-center">
            <a href="https://github.com/creativetimofficial/impact-design-system" target="_blank" class="btn btn-secondary mr-4 animate-up-2">
                View on GitHub
            </a>
            <!-- Place this tag where you want the button to render. -->
            <div class="mt-2">
                <!-- Place this tag where you want the button to render. -->
                <a class="github-button" href="https://github.com/creativetimofficial/impact-design-system" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/pixel-bootstrap-ui-kit on GitHub">Star</a>                            
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="github-big-icon">
          <span class="fab fa-github"></span>
        </div>
      </div>
</div>
<div class="row mt-6">
    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="card border-light p-4">
            <!-- Header -->
            <div class="card-header bg-white pb-0">
                <span class="d-block">
                    <span class="h3 text-gray font-weight-bold align-top">
                        Free Version
                    </span>
                </span>
            </div>
            <!-- End Header -->
            <!-- Content -->
            <div class="card-body">
                <ul class="list-group list-group-flush price-list mb-4">
                    <li class="list-group-item bg-white pl-0"><strong>100</strong> Components</li>
                    <li class="list-group-item bg-white pl-0"><strong>5</strong> Front Pages</li>
                    <li class="list-group-item bg-white pl-0"><strong>4</strong> Dashboard Pages</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Premium plugins</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Charts</li>
                    <li class="list-group-item bg-white border-0 pl-0 pb-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Premium Support</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 mt-lg-n4">
        <div class="card border-light p-4">
            <!-- Header -->
            <div class="card-header bg-white pb-0">
                <span class="d-block">
                    <span class="h3 text-primary font-weight-bold align-top">
                       Pro Version
                    </span>
                </span>
            </div>
            <!-- End Header -->
            <!-- Content -->
            <div class="card-body">
                <ul class="list-group list-group-flush price-list mb-5">
                    <li class="list-group-item bg-white pl-0"><strong>1500+</strong> Components</li>
                    <li class="list-group-item bg-white pl-0"><strong>25</strong> Front Pages</li>
                    <li class="list-group-item bg-white pl-0"><strong>20+</strong> Dashboard Pages</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Premium plugins</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Charts</li>
                    <li class="list-group-item bg-white border-0 pl-0 pb-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Premium Support</li>
                </ul>
                <a href="https://www.creative-tim.com/product/impact-design-system-pro" target="_blank" class="btn btn-block btn-primary animate-up-2"><span class="fas fa-paper-plane mr-2"></span> Upgrade to Pro</a>
            </div>
        </div>
    </div>
</div>
</div>
</section>


@endsection
