@extends('layouts/others')

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
                <h1 class="display-1 mb-4">Vehicle Specification</h1>
                {{-- <div style="display: inline-flex;">
                    <div style="padding-right:10px;"><a href="#"><small class="text-muted">What is the VIN? </small></a></div>
                    <div style="padding-left:10px;"><a href="#"><small class="text-muted">Where can you find it?</small></a></div>
                    <br>

                </div> --}}
                
                <div class="vinTitle">
                    <br>
                    <h5 style="text-transform: uppercase;">
                        {{ $data->specification->year .' '. $data->specification->make .' '. $data->specification->model}}
                    </h5>
                </div>
            
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<span style="margin-top: 20px"></span>
<section>
<div class="container">
    <div class="row">           
        <div class="table-responsive">
            <div class="col-12">
                <table class="table align-items-center">
                    <tbody>
                        <tr>
                            <th class="smTitle">VIN :<span class="smName"> {{$data->specification->vin}}</span></th>
                            <th class="smTitle">Make :<span class="smName"> {{$data->specification->make}}</span></th>
                            <th class="smTitle">Model :<span class="smName"> {{$data->specification->model}}</span></th>
                            <th class="smTitle">Year :<span class="smName"> {{$data->specification->year}}</span></th>
                        </tr>
                        <tr>
                            <th class="smTitle">Made in :<span class="smName"> {{$data->specification->made_in}}</span></th>
                            <th class="smTitle">Fuel type :<span class="smName"> {{$data->specification->fuel_type}}</span>
                            </th>
                            <th class="smTitle">Highway Mileage :<span class="smName"> {{$data->specification->highway_mileage}}</span></th>
                            <th class="smTitle">Transmission :<span class="smName"> {{$data->specification->transmission}}</span></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>


<section class="section section-ld">
    <div>
    <div class="container">
        <div style="display: inline-flex;">
            <div>
                <h3 style="color: #0849B3">DETAILED VEHICLE SPECIFICATION</h3>
            </div>
            <div>
                <span class="badge badge-alt dbtnl" style="text-transform: uppercase; color:green">{{$data->specification->year .' '. $data->specification->make .' '. $data->specification->model}}</span>
                <span class="badge badge-warning " data-toggle="tooltip" data-placement="top" title="{{ date('l jS \of F Y h:i:s A')}}">
                     Generated on
                  </span>
            </div>
        </div>
        <div class="row">           
                <div class="table-responsive">
                    <div class="col-12">
                        <table class="table align-items-center">
                            <tbody>
                                <tr>
                                    <th scope="col" class="sort" data-sort="year">Style</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->style}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">Made in</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->made_in}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">Steering type</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->steering_type}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">ABS</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->anti_brake_system}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">Transmission</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->transmission}}</span>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <th scope="col" class="sort" >Year</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->year}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Make</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->make}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Model</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->model}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Trim Level</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->trim_level}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Engine</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->engine}}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>       
    </div>
</section>

<section class="section section-lg bg-soft">
<div class="container">
<div class="row">
    <div class="col-12 col-lg-8">
        <h2 class="h1 font-weight-light mb-3"><strong>Autos & Cartalk</strong> VIN Checker</h2>
        <p class="lead mb-4">Autos & Cartalk is Nigeria's leading, fully registered automobile company founded in 2019 and with the country's largest dedicated Automotive/Vehicle/Car discussion forum you can trust. Read, learn, share, make money, meet people and participate in discussions about all cars/vehicles brands, tips, guides, comparison, news, etc.</p>
        <div class="d-flex align-items-center">
            <a href="https://autosandcartalk.com" target="_blank" class="btn btn-primary mr-4 animate-up-2">
                Visit our forum
            </a>
            <!-- Place this tag where you want the button to render. -->
            {{-- <div class="mt-2">
                <!-- Place this tag where you want the button to render. -->
                <a class="facebook-button" href="https://facebook.com/creativetimofficial/impact-design-system" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Like us on facebook">Star</a>                            
            </div> --}}
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="github-big-icon">
          <span class="fas fa-car"></span>
        </div>
    </div>
</div>

</section>


@endsection
