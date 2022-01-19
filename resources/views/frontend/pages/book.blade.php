@extends('frontend.master')
@section('content')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax">
                
            </div>
           
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>{{$booking->name}}</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{url('/home')}}">Home</a></li>
                            <li>/</li>
                            <li>{{$booking->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 single-blog">
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    <i class="fa fa-image"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                            rel="bookmark">{{$booking->name}}</a></h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-12">
                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img src="images/services/service.jpg" alt=""
                                                        class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>{{$booking->name}}</h3>
                                                <p>{{$booking->description}}</p>

                                                <h4><b>Service Features:</b></h4>
                                                <ul>
                                                <li>Well-trained Workmen.</li>
                                                <li>7 Days Service Warranty</li>
                                                <li>Doorstep service</li>
                                                <li>Safety Assurance</li>
                                                </ul>
                                                <br>
                                                
                                                <h4><b>Pricing:</b></h4>
                                                <ul>
                                                <li>Only Service Charge</li>
                                                <li>Visiting Charges is BDT 100 if no service is availed</li>
                                                </ul><br>

                                                <h4><b>Payment:</b></h4>
                                                <p>After service completion, customer will pay through Credit card or Cash on Delivery.</p>


                                                 <br>
                                                <h4><b>Inclusion</b></h4>
                                                <ul class="list-styles">
                                                    <li><i class="fa fa-one">1</i>
                                                    Well-trained service Provider
                                                        </li>
                                                        <li><i class="fa fa-one">2</i>
                                                        Safety Assurance

                                                        </li>
                                                </ul>
                                                <h4><b>Exclusion</b></h4>
                                                <ul class="list-styles">
                                                    <li><i class="fa fa-minus"></i>Excludes all components and parts (if used)</li>
                                                        <li><i class="fa fa-minus"></i>Excludes Transportation cost (if applied)</li>
                                                </ul>

                                                <h3><b>How To Order</b></h3>
                                                <ul class="list-styles">
                                                <li>
                                                    <i class="fa fas-one">1</i>
                                                    <b>Select Service</b>
                                                    <p>From the category, select the service you are looking for.</p>
                                                </li>

                                                <li>
                                                    <i class="fa fas-one">2</i>
                                                    <b>Book Your Schedule</b>
                                                    <p>Select your convenient time slot.</p>
                                                </li>
                                                <li>
                                                    <i class="fa fas-one">3</i>
                                                    <b>Place Order</b>
                                                    <p>Confirm your order by clicking ‘Place order’</p>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <aside class="widget" style="margin-top: 18px;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Booking Details</div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <td style="border-top: none;">Price</td>
                                                    <td style="border-top: none;">{{$booking->price}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Quntity
                                                        
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>BDT {{$booking->price}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <form>  
                                                                   
                                                <!-- <input type="submit" class="btn btn-primary" name="submit"
                                                    value=" Book Now"0> -->
                                                    @if(!empty(auth()->user()) )
                                                    <a href="{{route('home.payment')}}" class="btn btn-primary">Book Now</a>
                                                    <a href="{{route('cart.add',$booking->id)}}" class="btn btn-primary">Add to cart</a>
                                                    @else
                                                    <a href="{{route('customer.login')}}" class="btn btn-primary">Book Now</a>
                                                    @endif
                                            </form>
                                        </div>
                                    </div>
                                </aside>
                                <aside>
                                    <h3>Related Service</h3>
                                    <br>
                                    <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                        style="max-width: 460px">
                                        <a href="ac-wet-servicing.html">
                                            <div class="img-hover">
                                                <img src="{{url('frontend/images/services/thumbnails/service_1.jpg')}}" alt=""
                                                    class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>
                                                    AC Wet Servicing
                                                </h3>
                                                <hr class="separator">
                                                <p>AC Wet Servicing</p>
                                                <div class="content-btn"><a href="ac-wet-servicing.html"
                                                        class="btn btn-warning">View Details</a></div>
                                                        
                                                <div class="price"><b>From</b> BDT 2000</div>
                                            </div>
                                        </a>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
                 
        </section>
    

@endsection