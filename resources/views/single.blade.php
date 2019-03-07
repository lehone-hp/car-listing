@extends('layouts.app')

@section('content')

    <!-- Page Inner-->
    <section>
        <div class="background-image-maker gradient gradient-lr"></div>
        <div class="holder-image">
            <img src="/images/bg2.jpg" alt="" class="img-fluid d-none" />
        </div>
        <div class="black-overlay overlay-full"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 justify-content-center text-center">
                    <h1 class="text-white c-font-weight-700">Single Cars Listing</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Inner-->

    <!-- Breadcrumb -->
    <section class="py-0 h-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-5 col-lg-3 text-center">
                    <ol class="breadcrumb justify-content-center mb-0 c-bg-primary text-white py-3 position-relative">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Car Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- List Details -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                    <div class="car-listing">
                        <div class="flexslider c-bg-dark mb-4">
                            <ul class="slides">
                                <li class="position-relative"  data-thumb="/images/img1.jpg">
                                    <img src="/images/img1.jpg" alt="" class="img-fluid" />
                                    <div class="fullscreen position-absolute text-center">
                                        <a href="/images/img1.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </li>
                                <li class="position-relative" data-thumb="/images/img2.jpg">
                                    <img src="/images/img2.jpg" alt="" class="img-fluid" />
                                    <div class="fullscreen position-absolute text-center">
                                        <a href="/images/img2.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </li>
                                <li class="position-relative" data-thumb="/images/img3.jpg">
                                    <img src="/images/img3.jpg" alt="" class="img-fluid" />
                                    <div class="fullscreen position-absolute text-center">
                                        <a href="/images/img3.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </li>
                                <li class="position-relative" data-thumb="/images/img4.jpg">
                                    <img src="/images/img4.jpg" alt="" class="img-fluid" />
                                    <div class="fullscreen position-absolute text-center">
                                        <a href="/images/img4.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </li>
                                <li class="position-relative" data-thumb="/images/img5.jpg">
                                    <img src="/images/img5.jpg" alt="" class="img-fluid" />
                                    <div class="fullscreen position-absolute text-center">
                                        <a href="/images/img5.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="c-bg-dark rounded-top">
                            <ul class="nav nav-tabs border-0 flex-column flex-sm-row text-white" id="myTab" role="tablist">
                                <li class="nav-item mb-0 rounded-left">
                                    <a class="nav-link redial-light border-0 py-3 active" data-toggle="tab" href="#overview" role="tab" aria-expanded="true">Overview</a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link redial-light rounded-0 border-0 py-3" data-toggle="tab" href="#specifications" role="tab" aria-expanded="false">Specifications</a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link redial-light rounded-0 border-0 py-3" data-toggle="tab" href="#features" role="tab" aria-expanded="false">Features</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade active show" id="overview" role="tabpanel" aria-expanded="true">
                                <div class="border c-brd-light border-top-0">
                                    <div class="card-body pt-5">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                        <p class="mb-0">Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Sed fringilla mauris sit amet nibh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="specifications" role="tabpanel" aria-expanded="false">
                                <div class="border c-brd-light border-top-0">
                                    <div class="pt-4"></div>
                                    <div class="list-header p-3">
                                        <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#engine"><i class="flaticon-engine pr-1"></i> Engine</a>
                                    </div>
                                    <div id="engine" class="collapse show widget-content">
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                            <tr>
                                                <td>Engine Type</td>
                                                <td>U2 CRDI Diesel Engine</td>
                                            </tr>
                                            <tr>
                                                <td>Displacement</td>
                                                <td>1120</td>
                                            </tr>
                                            <tr>
                                                <td>Max Power</td>
                                                <td>71bhp @ 4000rpm</td>
                                            </tr>
                                            <tr>
                                                <td>Max Torque</td>
                                                <td>180.4Nm @ 1750-2500rpm</td>
                                            </tr>
                                            <tr>
                                                <td>No Of Cylinder</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>Valves Per Cylinder</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>Valve Configuration</td>
                                                <td>DOHC</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Supply System</td>
                                                <td>CRDI</td>
                                            </tr>
                                            <tr>
                                                <td>Turbo Charger</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>Super Charger</td>
                                                <td>No</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="list-header p-3">
                                        <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#dimensions"><i class="flaticon-transport-7 pr-1"></i> Dimensions</a>
                                    </div>
                                    <div id="dimensions" class="collapse show widget-content">
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                            <tr>
                                                <td>Length</td>
                                                <td>3995mm</td>
                                            </tr>
                                            <tr>
                                                <td>Width</td>
                                                <td>1660mm</td>
                                            </tr>
                                            <tr>
                                                <td>Height</td>
                                                <td>1520mm</td>
                                            </tr>
                                            <tr>
                                                <td>Ground Clearance</td>
                                                <td>165mm</td>
                                            </tr>
                                            <tr>
                                                <td>Wheel Base</td>
                                                <td>2425mm</td>
                                            </tr>
                                            <tr>
                                                <td>Front Tread</td>
                                                <td>1479mm</td>
                                            </tr>
                                            <tr>
                                                <td>Rear Tread</td>
                                                <td>1493mm</td>
                                            </tr>
                                            <tr>
                                                <td>Seating Capacity</td>
                                                <td>5 Comfortable</td>
                                            </tr>
                                            <tr>
                                                <td>Cargo Volume</td>
                                                <td>460-Litres Maximum</td>
                                            </tr>
                                            <tr>
                                                <td>Number of Doors</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Type</td>
                                                <td>Tubeless, Radial</td>
                                            </tr>
                                            <tr>
                                                <td>Wheel Type</td>
                                                <td>Alloy Wheel</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Tank Capacity</td>
                                                <td>65 Litres</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="features" role="tabpanel" aria-expanded="false">
                                <div class="border c-brd-light border-top-0">
                                    <div class="card-body pt-4">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <ul class="list-unstyled c-line-height-3 mb-0">
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Automatic Climate Control</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Floor Mats</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> ParkAssist</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Adaptive Cruise Control</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Rear Camera</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Seat Ventilation</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Tire Pressure Monitoring</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Brake Assist</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> 4-Wheel Disc Brakes</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Heated Rear Seats</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <ul class="list-unstyled c-line-height-3 mb-0">
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Aluminum Wheels</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Seat beal</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Child seat</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> GPS</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Power steering</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Low fuel warning light</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Vanity mirror</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Cup holders front</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Digital clock</li>
                                                    <li><i class="fa fa-check c-primary pr-2"></i> Navigation system</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card c-brd-light mb-4">
                        <div class="card-body">
                            <h4>Volvo xc90 inscription</h4>
                            <ul class="list-unstyled c-line-height-2_5 mb-0">
                                <li><small class="c-light">Price</small> <h4 class="d-inline-block c-primary mb-1">$43,600 </h4></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <table class="table mb-0 c-line-height-1_5 c-brd-light">
                            <tbody>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-calendar pr-1"></i> Body Type:</td>
                                <td>2015</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-fuel pr-1"></i> Fuel:</td>
                                <td>Diesel</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-transport-2 pr-1"></i> Transmission:</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-ammunition pr-1"></i> Color:</td>
                                <td>White</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-clock pr-1"></i> Driven:</td>
                                <td>50,000 km</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-engine pr-1"></i> Engine:</td>
                                <td>3500 cc</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card c-brd-light mb-4">
                        <div class="c-bg-light">
                            <div class="card-body p-3">
                                <h6 class="mb-0">Contact Seller</h6>
                            </div>
                        </div>
                        <div class="card-body py-4 bg-white">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                            <a href="#" class="btn btn-primary btn-lg text-uppercase"> Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End List Details -->

    <!-- Car Featured-->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h3>Related Cars</h3>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                </div>
            </div>
            <div class="slider multiple-items2">
                <div>
                    <a href="#"><img src="/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Aston Martin DB5</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $28,600 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Chevrolet camaro SS</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,800 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Land Rover Discovery XXV</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $41,300 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Aston Martin DB5</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $28,600 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Chevrolet camaro SS</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,800 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Land Rover Discovery XXV</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $41,300 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Car Featured-->
@endsection