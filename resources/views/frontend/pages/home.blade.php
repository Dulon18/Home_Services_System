@extends('frontend.master')
@section('content')

<div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>SurfsideMedia <span>Choice</span> of Services</h2>
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
                                        <img style="width: 250px; height: 250px"  src="{{url('uploads/'.$service->Image)}}"  alt="AC Dry Servicing"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>{{$service->name}}</h3>
                                            <hr class="separator">
                                            <p>{{$service->name}}</p>
                                            <div class="content-btn"><a href="service-details/ac-dry-servicing.html"
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
                                        <a href="servicesbycategory/1.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
                                                <h5>AC</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/3.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
                                                <h5>Plumbing</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/4.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
                                                <h5>Electrical</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/6.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
                                                <h5>Home Cleaning</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/8.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
                                                <h5>Pest Control</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/11.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
                                                <h5>Computer Repair</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/12.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
                                                <h5>TV</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/13.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{url('frontend/images/sercat/service-icon.png')}}"></i>
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
                        <div>
                            <a class="g-list" href="service-details/ac-wet-servicing.html">
                                <div class="img-hover">
                                    <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="" class="img-responsive">
                                </div>

                                <div class="info-gallery">
                                    <h3>AC Wet Servicing</h3>
                                    <hr class="separator">
                                    <p>AC Wet Servicing</p>
                                    <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>&#36;</span><b>From</b>200</div>
                                </div>
                            </a>
                      </div>
                        <div>
                            <a class="g-list" href="service-details/bedroom-deep-cleaning.html">
                                <div class="img-hover">
                                    <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="" class="img-responsive">
                                </div>

                                <div class="info-gallery">
                                    <h3>Bedroom Deep Cleaning</h3>
                                    <hr class="separator">
                                    <p>Bedroom Deep Cleaning</p>
                                    <div class="content-btn"><a href="service-details/bedroom-deep-cleaning.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>&#36;</span><b>From</b>300</div>
                                </div>
                            </a>
                        </div>
                    <div>
                        <a class="g-list" href="service-details/dining-chair-shampooing.html">
                            <div class="img-hover">
                                <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Dining Chair Shampooing</h3>
                                <hr class="separator">
                                <p>Dining Chair Shampooing</p>
                                <div class="content-btn"><a href="service-details/dining-chair-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>400</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/carpet-shampooing.html">
                            <div class="img-hover">
                                <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Carpet Shampooing</h3>
                                <hr class="separator">
                                <p>Carpet Shampooing</p>
                                <div class="content-btn"><a href="service-details/carpet-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>200</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/fabric-sofa-shampooing.html">
                            <div class="img-hover">
                                <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Fabric Sofa Shampooing</h3>
                                <hr class="separator">
                                <p>Fabric Sofa Shampooing</p>
                                <div class="content-btn"><a href="service-details/fabric-sofa-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>211</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/bathroom-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Bathroom Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Bathroom Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/bathroom-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>233</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/floor-scrubbing-polishing.html">
                            <div class="img-hover">
                                <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Floor Scrubbing &amp; Polishing</h3>
                                <hr class="separator">
                                <p>Floor Scrubbing &amp; Polishing</p>
                                <div class="content-btn"><a href="service-details/floor-scrubbing-polishing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>411</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/mattress-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Mattress Shampooing</h3>
                                <hr class="separator">
                                <p>Mattress Shampooing</p>
                                <div class="content-btn"><a href="service-details/mattress-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>222</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/kitchen-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Kitchen Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Kitchen Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/kitchen-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>111</div>
                            </div>
                        </a>
                    </div>
                </div>
@endsection