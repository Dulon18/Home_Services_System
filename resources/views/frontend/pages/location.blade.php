@extends('frontend.master')
@section('content')
<div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Change Location</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{url('/home')}}">Home</a></li>
                            <li>/</li>
                            <li>Change Location</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <form action="setlocation" method="post" id="changelocationform">
                                <input type="hidden" name="_token" value="2NHPrBqKScv73zvhqc7UbyDOvtsWZNm2dbOyAkqx">
                                <div class="col-md-8">
                                    <h3>Search Your Location</h3>
                                    <p class="lead">
                                    </p>
                                    <input type="text" class="form-control" id="autocomplete" name="location"
                                        placeholder="Search Location....">
                                    <div id="map" style="height: 400px;"></div>
                                    
                                </div>

                                <div class="col-md-4">
                                    <aside class="addlocation">
                                        <h2><b>Your Location</b></h2>
                                                <p>Expert will arrive at the address given below</p>
                                        <address>
                                            <div class="form-group">
                                                <label for="streetnumber" class="col-form-label">House No:</label>
                                                <input type="text" class="form-control" id="street_number"
                                                    name="house_no">
                                            </div>
                                            <div class="form-group">
                                                <label for="routes" class="col-form-label">Road No:</label>
                                                <input type="text" class="form-control" id="route" name="routes">
                                            </div>
                                            <div class="form-group">
                                                <label for="city" class="col-form-label">Block No:</label>
                                                <input type="text" class="form-control" id="locality" name="city">
                                            </div>
                                            <div class="form-group">
                                                <label for="state" class="col-form-label">Sector No:</label>
                                                <input type="text" class="form-control" id="administrative_area_level_1"
                                                    name="state">
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class="col-form-label">Area:
                                                    
                                                </label>
                                                <input type="text" class="form-control" id="country" name="country">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <a class="btn btn-primary" href="">Book</a>
                                            </div>
                                        </address>
                                    </aside>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter content_resalt border-top">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection