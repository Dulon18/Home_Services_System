@extends('frontend.master')
@section('content')
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Registeration</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{url('/home')}}">Home</a></li>
                            <li>/</li>
                            <li>Registeration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 profile1" style="padding-bottom:40px;">
                            <div class="thinborder-ontop">
                                <h3>Provider Info</h3>
                                <form action="{{route('provider.store')}}" id="userregisterationform" method='POST'>  
                                    @csrf                                  
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" value="" required="" autofocus="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                     <input hidden type="text" name="role" id="" value="sprovider">
                                        
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">Profession</label>
                                            <div class="col-md-6">
                                            <select hidden name="profession" class="form-control" aria-label="Default select example">
                                                    <option selected > Select Profession</option>
                                                    <option value="1">Electrician </option>
                                                    <option value="2">Cleaner </option>
                                                    <option value="3">Plumber </option>
                                                    <option value="4">TV Mechanics </option>
                                                    <option value="5">Car Mechanics</option>
                                                    <option value="6">shifter</option>
                                                    <option value="7">Makeup Artist</option>
                                            </select>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row mb-0">
                                        <div class="col-md-10">
                                            <span style="font-size: 14px;">If you have already registered <a
                                                    href="{{url('/login')}}" title="Login">click here</a> to login</span>
                                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="section-twitter">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
@endsection