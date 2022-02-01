@extends('frontend.master')
@section('content')

<style type="text/css">
        body {
        background-color: #f9f9fa
    }
    .services{
        display: flex;
        flex-direction:row;
        
    }
   .OrderTable{
    width:85%;
    margin:auto;
    padding:20px;
    background:#f9f9fa;
    border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);

   }
    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden
    }
    .OrderTitle{
        margin-bottom: 30px;

    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px
    }

    .m-r-0 {
        margin-right: 0px
    }

    .m-l-0 {
        margin-left: 0px
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
        background: linear-gradient(to right, #ee5a6f, #f29263)
    }

    .user-profile {
        padding: 20px 0
    }

    .card-block {
        padding: 1.25rem
    }

    .m-b-25 {
        margin-bottom: 25px
    }

    .img-radius {
        border-radius: 5px
    }

    h6 {
        font-size: 14px
    }

    .card .card-block p {
        line-height: 25px
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px
        }
    }

    .card-block {
        padding: 1.25rem
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .card .card-block p {
        line-height: 25px
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .text-muted {
        color: #919aa3 !important
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .f-w-600 {
        font-weight: 600
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .user-card-full .social-link li {
        display: inline-block
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out
    }
</style>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img style="border-radius: 4px;" width="200px;"   src="{{url('frontend/assets/img/p2.jpg')}}" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600">{{auth()->user()->name}}</h6>
                                <p>Customer</p> 

                                <p>{{auth()->user()->id}}</p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information | <a href="{{route('frontend.home')}}"> Home </a></h6>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{auth()->user()->email}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">{{auth()->user()->phone}}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"></p>
                                        <h6 class="text-muted f-w-400">

                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="OrderTable">
<h3 class="OrderTitle">Your Order List </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order Id</th>
      <th scope="col">Services </th>
      <th scope="col">Order Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Customerorders as $items)
    @if(auth()->user()->id==$items->customer_id)
    
    <tr>
      <th scope="row">1</th>
      <td>#<a href=" "> {{$items->orderId}} </a> </td>
      <td>
          @foreach($CustomerOrderDetails as $orderdetails)
          @if($items->orderId==$orderdetails->order_number)
                @foreach($Services as $services)
                @if($orderdetails->serviceid==$services->id)
                        <div class="services">
                        <img style="width: 50px; height: 40px ; border-radius:4px;margin-right:10px; margin-bottom:5px;"  src="{{url('uploads/'.$services->Image)}}"  alt="AC Dry Servicing"
                                                class="img-responsive">          
                        <p>{{$services->name}}</p>

                        </div>
                    @endif
                @endforeach

            @endif
          @endforeach
      </td>
      <td>
        @if($items->status==0)
        <button type="button" class="btn btn-primary">panding</button>
        @elseif($items->status==1)
        <button type="button" class="btn btn-success">Accepted</button>
        @elseif($items->status==2)
        <button type="button" class="btn btn-info">Completed</button>
        @elseif($items->status==3)
        <button type="button" class="btn btn-danger">Canceled</button>

        @endif
      </td>
      <td>
      <a href="{{route('provider.assignorder',$items->orderId)}}" class="btn btn-outline-secondary">Details</a>
      </td>
    </tr>
        
    @endif
   @endforeach

  </tbody>
</table>
</div>

@endsection