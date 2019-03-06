@extends('layouts.app')

@section('content')


    <!-- Slider-->
    <section  class="py-0">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <div class="background-image-maker gradient gradient-lr"></div>
                <div class="holder-image">
                    <img src="images/slider1.jpg" alt="" class="img-fluid d-none" />
                </div>
            </div>
            <div class="item">
                <div class="background-image-maker gradient gradient-lr"></div>
                <div class="holder-image">
                    <img src="images/slider2.jpg" alt="" class="img-fluid d-none" />
                </div>
            </div>
            <div class="item">
                <div class="background-image-maker gradient gradient-lr"></div>
                <div class="holder-image">
                    <img src="images/slider3.jpg" alt="" class="img-fluid d-none" />
                </div>
            </div>
        </div>
        <div class="owl-text-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-5 col-lg-6">
                        <h4 class="text-white text-center">Find the Right Car for you</h4>
                        <div class="row">
                            <div class="col-3 pr-0">
                                <ul class="nav flex-column nav-pills text-uppercase font-weight-bold text-center" id="myTab" role="tablist">
                                    <li class="nav-item mb-1">
                                        <a class="nav-link redial-light rounded-left active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true" aria-expanded="true">New</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link redial-light rounded-left" data-toggle="tab" href="#tab2" role="tab" aria-selected="false" aria-expanded="false">Used</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-9 pl-0">
                                <div class="tab-content bg-white rounded-bottom rounded-right full-block" id="myTabContent2">
                                    <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-expanded="true">
                                        <div class="card-body p-4">
                                            <ul class="nav nav-tabs border-0 justify-content-center mb-4  flex-column flex-sm-row text-center" id="myTab" role="tablist">
                                                <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                                    <a class="nav-link redial-light rounded active" data-toggle="tab" href="#id1" role="tab" aria-selected="true" aria-expanded="true">By Budget</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link redial-light rounded" data-toggle="tab" href="#id2" role="tab" aria-selected="false" aria-expanded="false">By Brand</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                                                <div class="tab-pane fade active show" id="id1" role="tabpanel" aria-expanded="true">
                                                    <form>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>--- Select Budget ---</option>
                                                                <option value="1-lakh-5-lakh">1000000 XAF - 5000000 XAF</option>
                                                                <option value="5-lakh-10-lakh">5000000 XAF - 10000000 XAF</option>
                                                                <option value="10-lakh-20-lakh">10000000 XAF - 20000000 XAF</option>
                                                                <option value="20-lakh-50-lakh">20000000 XAF - 50000000 XAF</option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                                    <form>
                                                        <div class="form-group">
                                                            <select class="form-control rounded">
                                                                <option>--- Select Model ---</option>
                                                                <option value="Ford Mustang">Mustang </option>
                                                                <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                                                <option value="BMW X6 M">BMW X6 M</option>
                                                                <option value="Aston Martin DB5">Aston Martin DB5</option>
                                                                <option value="Chevrolet Camaro">Chevrolet Camaro</option>
                                                                <option value="Honda City i VTEC SV">Honda City i VTEC SV</option>
                                                                <option value="Volkswagen Jetta">Volkswagen Jetta</option>
                                                                <option value="Tata Aria Pure 4x2">Tata Aria Pure 4x2</option>.
                                                                <option value="Skoda Octavia Ambition 1.4 TSI MT">Skoda Octavia Ambition 1.4 TSI MT</option>
                                                                <option value="Audi A4 35 TDI Premium">Audi A4 35 TDI Premium</option>
                                                                <option value="Renault Fluence E4 D">Renault Fluence E4 D</option>
                                                                <option value="Nissan Micra AT">Nissan Micra AT</option>
                                                                <option value="Mahindra Scorpio S10 AT 2WD">Mahindra Scorpio S10 AT 2WD</option>
                                                                <option value="Toyota Etios G">Toyota Etios G</option>
                                                                <option value="Maruti Swift ZXI">Maruti Swift ZXI</option>
                                                                <option value="Hyundai I20">Hyundai I20</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control rounded">
                                                                <option value="">--- Select Brand ---</option>
                                                                <option value="Ford">Ford </option>
                                                                <option value="Volvo">Volvo</option>
                                                                <option value="BMW">BMW</option>
                                                                <option value="Aston">Aston</option>
                                                                <option value="Chevrolet">Chevrolet</option>
                                                                <option value="Honda">Honda City i VTEC SV</option>
                                                                <option value="Volkswagen">Volkswagen</option>
                                                                <option value="Tata">Tata</option>.
                                                                <option value="Skoda">Skoda</option>
                                                                <option value="Audi">Audi</option>
                                                                <option value="Ranault">Ranault</option>
                                                                <option value="Nissan">Nissan</option>
                                                                <option value="Mahindra">Mahindra</option>
                                                                <option value="Toyota">Toyota</option>
                                                                <option value="Maruti">Maruti</option>
                                                                <option value="Hyundai">Hyundai</option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-expanded="false">
                                        <div class="card-body p-4">
                                            <ul class="nav nav-tabs border-0 justify-content-center mb-4  flex-column flex-sm-row text-center" id="myTab" role="tablist">
                                                <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                                    <a class="nav-link redial-light rounded active" data-toggle="tab" href="#id3" role="tab" aria-selected="true" aria-expanded="true">By Budget</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link redial-light rounded" data-toggle="tab" href="#id4" role="tab" aria-selected="false" aria-expanded="false">By Brand</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                                                <div class="tab-pane fade active show" id="id3" role="tabpanel" aria-expanded="true">
                                                    <form>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>--- Select Budget ---</option>
                                                                <option value="0">-Select Budget-</option>
                                                                <option value="1-lakh-5-lakh">1000000 XAF - 5000000 XAF</option>
                                                                <option value="5-lakh-10-lakh">5000000 XAF - 10000000 XAF</option>
                                                                <option value="10-lakh-20-lakh">10000000 XAF - 20000000 XAF</option>
                                                                <option value="20-lakh-50-lakh">20000000 XAF - 50000000 XAF</option>
                                                                <option value="50-lakh-1-crore">50000000 XAF - 1 Crore</option>
                                                                <option value="above-1-crore">Above 1 Crore</option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                                    <form>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>--- Select Budget ---</option>
                                                                <option value="0">-Select Budget-</option>
                                                                <option value="1-lakh-5-lakh">1000000 XAF - 5000000 XAF</option>
                                                                <option value="5-lakh-10-lakh">5000000 XAF - 10000000 XAF</option>
                                                                <option value="10-lakh-20-lakh">10000000 XAF - 20000000 XAF</option>
                                                                <option value="20-lakh-50-lakh">20000000 XAF - 50000000 XAF</option>
                                                                <option value="50-lakh-1-crore">50000000 XAF - 1 Crore</option>
                                                                <option value="above-1-crore">Above 1 Crore</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option value="">--- Select City ---</option>
                                                                <option value="New Delhi">New Delhi</option>
                                                                <option value="Bangalore">Bangalore</option>
                                                                <option value="Mumbai">Mumbai</option>
                                                                <option value="Hyderabad">Hyderabad</option>
                                                                <option value="Chennai">Chennai</option>
                                                                <option value="Jaipur">Jaipur</option>
                                                                <option value="Pune">Pune</option>
                                                                <option value="Kolkata">Kolkata</option>
                                                                <option value="Gurgaon">Gurgaon</option>
                                                                <option value="Ahmedabad">Ahmedabad</option>
                                                                <option value="Noida">Noida</option>
                                                                <option value="Chandigarh">Chandigarh</option>
                                                                <option value="Indore">Indore</option>
                                                                <option value="Kochi">Kochi</option>
                                                                <option value="" disabled="">--------------------</option>
                                                                <option value="Agra">Agra</option>
                                                                <option value="Ahmedabad">Ahmedabad</option>
                                                                <option value="Ajmer">Ajmer</option>
                                                                <option value="Akola">Akola</option>
                                                                <option value="Alibag">Alibag</option>
                                                                <option value="Aligarh">Aligarh</option>
                                                                <option value="Allahabad">Allahabad</option>
                                                                <option value="Alwar">Alwar</option>
                                                                <option value="Amalapuram">Amalapuram</option>
                                                                <option value="Ambala">Ambala</option>
                                                                <option value="Ambernath">Ambernath</option>
                                                                <option value="Ambikapur">Ambikapur</option>
                                                                <option value="Amethi">Amethi</option>
                                                                <option value="Amravati">Amravati</option>
                                                                <option value="Amreli">Amreli</option>
                                                                <option value="Amritsar">Amritsar</option>
                                                                <option value="Amroha">Amroha</option>
                                                                <option value="Anantapur">Anantapur</option>
                                                                <option value="Aurangabad(bh)">Aurangabad(bh)</option>
                                                                <option value="Avadi">Avadi</option>
                                                                <option value="Azamgarh">Azamgarh</option>
                                                                <option value="Baddi">Baddi</option>
                                                                <option value="Badlapur">Badlapur</option>
                                                                <option value="Baran">Baran</option>
                                                                <option value="Barasat">Barasat</option>
                                                                <option value="Baraut">Baraut</option>
                                                                <option value="Bardhaman">Bardhaman</option>
                                                                <option value="Bardoli">Bardoli</option>
                                                                <option value="Bareilly">Bareilly</option>
                                                                <option value="Bargarh">Bargarh</option>
                                                                <option value="Baripada">Baripada</option>
                                                                <option value="Barmer">Barmer</option>
                                                                <option value="Barnala">Barnala</option>
                                                                <option value="Barpeta">Barpeta</option>
                                                                <option value="Barrackpore">Barrackpore</option>
                                                                <option value="Barsar">Barsar</option>
                                                                <option value="Barshi">Barshi</option>
                                                                <option value="Baruipur">Baruipur</option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider-->

    <!-- Car Deals-->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12">
                    <h3>Best Car Deals For You</h3>
                    <ul class="nav nav-tabs border-0 py-3 flex-column flex-sm-row" id="myTab" role="tablist">
                        <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                            <a class="nav-link redial-light rounded active newslider" data-toggle="tab" href="#new" role="tab" aria-selected="true" aria-expanded="true">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link redial-light rounded usedslider" data-toggle="tab" href="#use" role="tab" aria-selected="false" aria-expanded="false">Used</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                <div class="tab-pane fade active show" id="new" role="tabpanel" aria-expanded="false">
                    <div class="slider multiple-items">
                        <div>
                            <a href="#"><img src="images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Volvo xc90 inscription</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$43,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Range Rover auto car</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$58,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Chevrolet corvette C7</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$36,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Tesla model S</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$49,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">

                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Volvo xc90 inscription</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$43,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Range Rover auto car</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$58,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Chevrolet corvette C7</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$36,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Tesla model S</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$49,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="use" role="tabpanel" aria-expanded="true">
                    <div class="slider multiple-itemsused">
                        <div>
                            <a href="#"><img src="images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Volvo xc90 inscription</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$43,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Range Rover auto car</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$58,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Chevrolet corvette C7</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$36,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Tesla model S</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$49,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">

                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Volvo xc90 inscription</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$43,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Range Rover auto car</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$58,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Chevrolet corvette C7</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$36,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single') }}">Tesla model S</a></h6>
                                    <small><h6 class="c-primary d-inline-block mb-0">$49,000 </h6> Price onwards</small>
                                </div>
                                <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                    <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                    <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Car Deals-->

    <!-- Car Featured-->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 d-flex justify-content-center pb-4">
                    <h3>Featured Cars</h3>
                </div>
            </div>
            <div class="slider multiple-items2">
                <div>
                    <a href="#"><img src="images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="{{ route('single') }}">Aston Martin DB5</a></h6>
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
                    <a href="#"><img src="images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="{{ route('single') }}">Chevrolet camaro SS</a></h6>
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
                    <a href="#"><img src="images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="{{ route('single') }}">Land Rover Discovery XXV</a></h6>
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
                    <a href="#"><img src="images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="{{ route('single') }}">Aston Martin DB5</a></h6>
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
                    <a href="#"><img src="images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="{{ route('single') }}">Chevrolet camaro SS</a></h6>
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
                    <a href="#"><img src="images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="{{ route('single') }}">Land Rover Discovery XXV</a></h6>
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

    <!-- Brand-->
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-12 col-lg-6 pb-3">
                    <h3>Browse Cars by Top Brands</h3>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                </div>
            </div>
            <div id="owl-client" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand1.png" alt="Cadillac" title="Cadillac" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand2.png" alt="Acura" title="Acura" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand3.png" alt="Chevrolet" title="Chevrolet" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand4.png" alt="Bugatti" title="Bugatti" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand5.png" alt="Mazda" title="Mazda" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand6.png" alt="Bentley" title="Bentley" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand7.png" alt="Lamborghini" title="Lamborghini" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand8.png" alt="Jaguar" title="Jaguar" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand9.png" alt="Porsche" title="Porsche" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand10.png" alt="Audi" title="Audi" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand11.png" alt="Ford" title="Ford" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand12.png" alt="Hyundai" title="Hyundai" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand1.png" alt="Cadillac" title="Cadillac" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand2.png" alt="Acura" title="Acura" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand3.png" alt="Chevrolet" title="Chevrolet" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand4.png" alt="Bugatti" title="Bugatti" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand5.png" alt="Mazda" title="Mazda" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand6.png" alt="Bentley" title="Bentley" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand7.png" alt="Lamborghini" title="Lamborghini" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand8.png" alt="Jaguar" title="Jaguar" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand9.png" alt="Porsche" title="Porsche" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand10.png" alt="Audi" title="Audi" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand11.png" alt="Ford" title="Ford" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand12.png" alt="Hyundai" title="Hyundai" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand1.png" alt="Cadillac" title="Cadillac" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand2.png" alt="Acura" title="Acura" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand3.png" alt="Chevrolet" title="Chevrolet" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand4.png" alt="Bugatti" title="Bugatti" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand5.png" alt="Mazda" title="Mazda" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand6.png" alt="Bentley" title="Bentley" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand7.png" alt="Lamborghini" title="Lamborghini" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand8.png" alt="Jaguar" title="Jaguar" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand9.png" alt="Porsche" title="Porsche" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand10.png" alt="Audi" title="Audi" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand11.png" alt="Ford" title="Ford" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                            <a href="#">
                                <div class="card c-brd-light rounded-0 text-center">
                                    <div class="card-body py-0">
                                        <img src="images/brand12.png" alt="Hyundai" title="Hyundai" class="img-fluid" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Brand-->

    <!-- Advertise-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="position-relative">
                        <a href="#"><img src="images/advertise1.jpg" alt="" class="img-fluid w-100" /></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="position-relative">
                        <a href="#"><img src="images/advertise2.jpg" alt="" class="img-fluid w-100" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Advertise-->

    <!-- Testimonial-->
    <section class="image-bg">
        <div class="background-image-maker"></div>
        <div class="holder-image">
            <img src="images/bg1.jpg" alt="" class="img-fluid d-none" />
        </div>
        <div class="black-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 d-flex justify-content-center pb-4">
                    <h3 class="text-white mb-0">What Say Our Customers</h3>
                </div>
            </div>
            <div class="slider testimonial text-white">
                <div>
                    <div class="card c-brd-primary c-bg-primary mb-5">
                        <div class="card-body p-4">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                            <h6 class="text-white">John Deo </h6>
                            <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                            </blockquote>
                            <span class="sprite"></span>
                        </div>
                    </div>
                    <div class="media ml-5">
                        <img src="images/author3.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                        <div class="media-body align-self-center">
                            <h6 class="mb-0 text-white">Marry Anderson</h6>
                            <small>Manager of XYZ</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card c-brd-primary c-bg-primary mb-5">
                        <div class="card-body p-4">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                            <h6 class="text-white">Customer Support </h6>
                            <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                            </blockquote>
                            <span class="sprite"></span>
                        </div>
                    </div>
                    <div class="media ml-5">
                        <img src="images/author1.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                        <div class="media-body align-self-center">
                            <h6 class="mb-0 text-white">Alex Anderson</h6>
                            <small>Manager of XYZ</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card c-brd-primary c-bg-primary mb-5">
                        <div class="card-body p-4">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                            <h6 class="text-white">Customer Support </h6>
                            <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                            </blockquote>
                            <span class="sprite"></span>
                        </div>
                    </div>
                    <div class="media ml-5">
                        <img src="images/author2.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                        <div class="media-body align-self-center">
                            <h6 class="mb-0 text-white">Marry Anderson</h6>
                            <small>Manager of XYZ</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card c-brd-primary c-bg-primary mb-5">
                        <div class="card-body p-4">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                            <h6 class="text-white">John Deo </h6>
                            <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                            </blockquote>
                            <span class="sprite"></span>
                        </div>
                    </div>
                    <div class="media ml-5">
                        <img src="images/author3.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                        <div class="media-body align-self-center">
                            <h6 class="mb-0 text-white">Marry Anderson</h6>
                            <small>Manager of XYZ</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card c-brd-primary c-bg-primary mb-5">
                        <div class="card-body p-4">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                            <h6 class="text-white">Customer Support </h6>
                            <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                            </blockquote>
                            <span class="sprite"></span>
                        </div>
                    </div>
                    <div class="media ml-5">
                        <img src="images/author1.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                        <div class="media-body align-self-center">
                            <h6 class="mb-0 text-white">Alex Anderson</h6>
                            <small>Manager of XYZ</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial-->

@endsection