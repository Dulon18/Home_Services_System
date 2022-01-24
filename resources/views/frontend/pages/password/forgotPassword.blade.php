@extends('frontend.master')
@section('content')
@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif
@if(session()->has('error'))
   <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Login</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>/</li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-xs-12 col-sm-3 col-md-3 profile1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 profile1" style="min-height: 300px;">
                                <div class="thinborder-ontop">
                                    <h3>FORGOT PASSWORD</h3>
                                    <form action ="{{route('home.passwoard')}}" id="userloginform" method="POST">
                                        @csrf                                        
                                        <div class="form-group row">
                                            @if(session('error'))
                                            <div>
                                            {{session('success')}}
                                            </div>
                                            @endif
                                            @if(session('success'))
                                           <div>
                                           {{session('error')}}
                                           </div>
                                            @endif
                                            
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="" required="" placeholder="Type your email address" autofocus="">
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                            
                                            <div class="col-md-4">
                                                <!-- <label for="">
                                                    <button type="submit" class="btn btn-primary pull-right">Login</button> -->
                                                    <input type="submit" class="btn btn-info" value="Email Password Reset Link" name="submit">
                                                
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>                                
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 profile1">
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