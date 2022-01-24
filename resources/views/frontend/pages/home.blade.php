@extends('frontend.master')
@section('content')


@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

<div id="layout">
        
        <section class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/8.jpg')}}" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/4.jpg')}}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/5.jpg')}}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>

                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/1.jpg')}}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>

                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/6.jpg')}}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>

                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h2 style="color:#fff;">BOOK A SERVICE</h2>
                    <p class="lead">Book a service at very affordable price, </p>
                </div>
                <div class="filter-header">
                    <form id="sform" action="{{route('frontend.home')}}" method="get">                        
                        <input type="text" id="q" name="search" required="required" placeholder="What Services do you want?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
        <section class="content-central">
            <div class="content_info content_resalt">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="sponsors" class="tooltip-hover">
                            @foreach($categories as $c)
                                <li data-toggle="tooltip" title="" data-original-title={{$c->name}}> <a
                                        href="{{route('home.category.services',$c->id)}}">
                                        <img src="{{url('uploads/'.$c->image)}}"
                                            alt="AC"></a>
                                            <p> {{$c->name}}</p>
                                        </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="semiboxshadow text-center">
                <img src="assets/img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>Angels Arms <span>Choice</span> of Services</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach($services as $service)
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="service-details/ac-dry-servicing.html">
                                        <div class="img-hover">
                                        <img style="width: 250px; height: 200px"  src="{{url('uploads/'.$service->Image)}}"  alt="AC Dry Servicing"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>{{$service->name}}</h3>
                                            <hr class="separator">
                                            <!-- <p>{{$service->name}}</p> -->
                                            <div class="content-btn"><a href="/book/{{$service->id}}"
                                                    class="btn btn-primary">Book Now</a></div>
                                                    
                                            <div class="price"><b>From</b>BDT {{$service->price}}</div>
                                        </div>
                                    </a>     
                            </div>
                        @endforeach 
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info">
                <div class="bg-dark color-white border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="services-lines-info">
                                    <h2>WELCOME TO DIVERSIFIED</h2>
                                    <p class="lead">
                                        Book best services at one place.
                                        <span class="line"></span>
                                    </p>
                                    <p>Find a wide variety of home services.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="services-lines">
                                    <li>
                                        <a href="#">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/1.png')}}"></i>
                                                <h5>AC</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/3.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/3.png')}}"></i>
                                                <h5>Plumbing</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/4.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/4.png')}}"></i>
                                                <h5>Electrical</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/6.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/6.png')}}"></i>
                                                <h5>Home Cleaning</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/8.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/8.png')}}"></i>
                                                <h5>Pest Control</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/11.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/13.png')}}"></i>
                                                <h5>Computer Repair</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/12.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/11.png')}}"></i>
                                                <h5>TV</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/13.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/12.png')}}"></i>
                                                <h5>Refrigerator</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <div>
            <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2><span>Appliance</span>Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                  </div>
                   <div id="boxes-carousel">
                       @foreach($applianc_services as $aps)
                        <div>
                            <a class="g-list" href="service-details/ac-wet-servicing.html">
                                <div class="img-hover">
                                <img style="width: 450px; height: 250px"  src="{{url('/uploads/'.$aps->image)}}" alt="plz..upload">
                                </div>

                                <div class="info-gallery">
                                    <h3>{{$aps->name}}</h3>
                                    <hr class="separator">
                                    <p>{{$aps->name}}</p>
                                    <div class="content-btn"><a href="/booking/{{$aps->id}}"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><b>From</b>BDT {{$aps->price}}</div>
                                </div>
                            </a>
                      </div>
                      @endforeach

                   
                </div>
</div>
</section>     
       
   
@endsection