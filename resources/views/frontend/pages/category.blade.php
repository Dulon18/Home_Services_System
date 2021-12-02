@extends('frontend.master')
@section('content')
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
                            @foreach($categories as $category)
                            <div class="col-md-8">
                                <ul class="services-lines">
                                    <li>
                                        <a href="#">
                                            <div class="item-service-line">
                                                <i class="fa">
                                                    <img style="width: 250px; height: 200px"  src="{{url('uploads/'.$category->image)}}"  alt="AC Dry Servicing"
                                                class="img-responsive"></i>
                                                <h5>{{$category->name}}</h5>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div>
@endsection