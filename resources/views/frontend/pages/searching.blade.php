@extends('frontend.master')
@section('content')
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
@endsection
</div>