@extends('frontend.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    body {
        background-color: #eee
    }

    nav,
    .wrapper {
        padding: 10px 50px
    }

    nav .logo a {
        color: #000;
        font-size: 1.2rem;
        font-weight: bold;
        text-decoration: none
    }

    nav div.ml-auto a {
        text-decoration: none;
        font-weight: 600;
        font-size: 0.8rem
    }

    header {
        padding: 20px 0px
    }

    header .active {
        font-weight: 700;
        position: relative
    }

    header .active .fa-check {
        position: absolute;
        left: 50%;
        bottom: -27px;
        background-color: #fff;
        font-size: 0.7rem;
        padding: 5px;
        border: 1px solid #008000;
        border-radius: 50%;
        color: #008000
    }

    .progress {
        height: 2px;
        background-color: #ccc
    }

    .progress div {
        display: flex;
        align-items: center;
        justify-content: center
    }

    .progress .progress-bar {
        width: 40%
    }

    #details {
        padding: 30px 50px;
        min-height: 300px
    }

    input {
        border: none;
        outline: none
    }

    .form-group .d-flex {
        border: 1px solid #ddd
    }

    .form-group .d-flex input {
        width: 95%
    }

    .form-group .d-flex:hover {
        color: #000;
        cursor: pointer;
        border: 1px solid #008000
    }

    select {
        width: 100%;
        padding: 8px 5px;
        border: 1px solid #ddd;
        border-radius: 5px
    }

    input[type="checkbox"]+label {
        font-size: 0.85rem;
        font-weight: 600
    }

    #address,
    #cart,
    #summary {
        padding: 20px 50px
    }

    #address .d-md-flex p.text-justify,
    #register p.text-muted {
        margin: 0
    }

    #register {
        background-color: #d9ecf2
    }

    #register a {
        text-decoration: none;
        color: #333
    }

    #cart,
    #summary {
        max-width: 500px
    }

    .h6 {
        font-size: 1.2rem;
        font-weight: 700
    }

    .h6 a {
        text-decoration: none;
        font-size: 1rem
    }

    .item img {
        object-fit: cover;
        border-radius: 5px
    }

    .item {
        position: relative
    }

    .number {
        position: absolute;
        font-weight: 800;
        color: #fff;
        background-color: #0033ff;
        padding-left: 7px;
        border-radius: 50%;
        border: 1px solid #fff;
        width: 25px;
        height: 25px;
        top: -5px;
        right: -5px
    }

    .display-5 {
        font-size: 1.2rem
    }

    #cart~p.text-muted {
        margin: 0;
        font-size: 0.9rem
    }

    tr.text-muted td {
        border: none
    }

    .fa-minus,
    .fa-plus {
        font-size: 0.7rem
    }

    .table td {
        padding: 0.3rem
    }

    .btn.text-uppercase {
        border: 1px solid #333;
        font-weight: 600;
        border-radius: 0px
    }

    .btn.text-uppercase:hover {
        background-color: #333;
        color: #eee
    }

    .btn.text-white {
        background-color: #66cdaa;
        border-radius: 0px
    }

    .btn.text-white:hover {
        background-color: #3cb371
    }

    .wrapper .row+div.text-muted {
        font-size: 0.9rem
    }

    .mobile,
    #mobile {
        display: none
    }

    .buttons {
        vertical-align: text-bottom
    }

    #register {
        width: 50%
    }

    @media(min-width:768px) and (max-width: 991px) {
        .progress .progress-bar {
            width: 33%
        }

        #cart,
        #summary {
            max-width: 100%
        }

        .wrapper div.h5.large,
        .wrapper .row+div.text-muted {
            display: none
        }

        .mobile.h5,
        #mobile {
            display: block
        }
    }

    @media(min-width: 576px) and (max-width: 767px) {
        .progress .progress-bar {
            width: 29%
        }

        #cart,
        #summary {
            max-width: 100%
        }

        .wrapper div.h5.large,
        .wrapper .row+div.text-muted {
            display: none
        }

        .mobile.h5,
        #mobile {
            display: block
        }

        .buttons {
            width: 100%
        }
    }

    @media(max-width: 575px) {
        .progress .progress-bar {
            width: 38%
        }

        #cart,
        #summary {
            max-width: 100%
        }

        nav,
        .wrapper {
            padding: 10px 30px
        }

        #register {
            width: 100%
        }
    }

    @media(max-width: 424px) {
        body {
            width: fit-content
        }
    }

    @media(max-width: 375px) {
        .progress .progress-bar {
            width: 35%
        }

        body {
            width: fit-content
        }
    }
</style>
<?php
    $order= rand(100000,999999);
?>
<div class="wrapper">
    <div class="h5 large">Billing Address</div>
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
            <div class="mobile h5">Billing Address</div>
            <div id="details" class="bg-white rounded pb-5">
                <form action="{{route('StoreOrderinfo')}}" method='POST' enctype="multipart/form-data">
                    @csrf
                    <!--input Files Take Order and user Id-->
                    <input type="text" name="ordernumber" value="<?php echo"$order"?>" hidden>
                    <input type="text" name="userid" value="{{auth()->user()->id}}" hidden>
                    <!--input Files-->

                    <div class="form-group"> <label class="text-muted">Name</label> <input type="text" value="{{auth()->user()->name}}" class="form-control"> </div>
                    <div class="form-group"> <label class="text-muted">Email</label>
                        <div class="d-flex jusify-content-start align-items-center rounded p-2"> <input type="email" value="{{auth()->user()->email}}"> <span class="fas fa-check text-success pr-sm-2 pr-0"></span> </div>
                    </div>
                    <div class="form-group"> <label class="text-muted">Phone</label>
                        <div class="d-flex jusify-content-start align-items-center rounded p-2"> <input type="phone" value="{{auth()->user()->phone}}"> <span class="fas fa-check text-success pr-sm-2 pr-0"></span> </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Area</label>
                            <select required name="area" id="">
                                <option value="1">Uttara</option>
                                <option value="2">Gulsan</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Sector/Block</label>
                                <div class="d-flex jusify-content-start align-items-center rounded p-2">
                                     <input required type="text " name="sector"> <span class="fas fa-check text-success pr-2"></span> 
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group"> 
                                <label>Select Date
                                    <!-- <p>Expert will arrive at your given date</p> -->
                                </label>
                                <div class="d-flex jusify-content-start align-items-center rounded p-2"> 
                                    <input required type="date" name="requestdate" placeholder="Expert will arrive at your given date"  > 
                                     </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group"> <label>Address</label>
                                <div class="d-flex jusify-content-start align-items-center rounded p-2"> 
                                    <input required type="text" name="addrees" placeholder="Road , house no ,floor no "  > 
                                    <span class="fas fa-check text-success pr-2"></span> </div>
                            </div>
                        </div>
                    </div> 
                </div> 

            </div>
            <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1 pt-lg-0 pt-3">
                <div id="cart" class="bg-white rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="h6">Cart Summary</div>
                        <div class="h6"> <a href="#"></a> </div>
                    </div>
                <!-- @if($carts) -->
                @php
                $i=1;
                $priceValue=0;
                $subtotal=0;
                $TotalpriceValue=0;
                @endphp
                 @foreach($carts as $key=>$data)

    
                <div class="d-flex justify-content-between">
                <div class="item pr-2"> <img src="{{url('/uploads/'.$data['image'])}}" width="100px" alt="plz..upload" width="80" height="80">
                <!--input Files -->
                <input type="text" name="serviceId[]" value="{{$data['id']}}" hidden>
                <input type="text" name="quantity[]" value="{{$data['quantity']}}" hidden >

                    <div class="number">{{$data['quantity']}}</div>
                    </div>
                    <div class="d-flex flex-column px-3"> {{$data['name']}}</div>
                    <div class="ml-auto ">BDT {{$data['price']}} </div>
                    <div class="ml-auto ">BDT {{$data['price']*$data['quantity']}}</div>

                </div>

                <div class="my-3">  </div>
                    <?php
                     $subtotal = $data['price']*$data['quantity']+ $subtotal ;
                    $unitPrice = $data['price']*$data['quantity'];
                     ?>
                     
                @endforeach
                <div class="d-flex align-items-center">
                    <div class="display-5">Subtotal </div>
                    <div class="ml-auto d-flex">
                        <div class="text-dark text-uppercase px-3"></div>
                        <div class="font-weight-bold"> {{$subtotal}}</div>
                    </div>
                    <input type="text" name="price" value="{{$unitPrice}}" hidden >
                </div>
                <div class="d-flex align-items-center py-2 border-bottom">
                    <div class="display-5 ">Service Fee </div>
                    <div class="ml-auto d-flex">
                        <div class="text-dark text-uppercase px-3"></div>
                        <div class="font-weight-bold">BDT 100</div>
                    </div>

                </div>
                <div class="d-flex align-items-center py-2">
                    <div class="display-5">Total</div>
                    <div class="ml-auto d-flex">
                        <div class="text-primary text-uppercase px-3">bdt</div>
                        <!-- Total Values -->
                        <?php
                     $TotalpriceValue = $subtotal +100;
                      
                     ?>
                        <div class="font-weight-bold"> {{$TotalpriceValue}}</div>
                    </div>
                    <input type="text" name="totalprice" value="{{$TotalpriceValue}}" hidden >
                </div>
                <!-- @endif -->
            </div>
            <!-- Payment Option -->
            <div id="cart" class="bg-white rounded mt-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="h6">Payment Method</div>
                    <div class="h6"> <a href="#"></a> </div>
                </div>
                <div class="d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="PaymentOption" value="1" checked>Cash On Service
                    <label class="form-check-label" for="radio1"></label>
                </div>

                </div>
                <div class="my-3">  </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-6">
                <p class="text-muted">Need help with an order?</p>
                </div>
                <div class="col-sm-6">

                    <button type="submit" href="#" class="text-decoration-none text-white btn text-white ml-auto"> <span class="fas fa-check-circle"></span> Confirm Order </button></div>
                
            </div>
            
           

            </div>
            <div class="row pt-lg-3 pt-2 buttons mb-sm-0 mb-2">
                <div class="col-md-6">
                    <div class="btn text-uppercase"> <a href="{{route('frontend.home')}}" class="text-decoration-none text-dark "> back to shopping</a> </div>
                </div>
                <div class="col-md-6 pt-md-0 pt-3 d-flex justify-content-end">
                    
                </div>
            </div>

        </div>
    </div>

</div>
</form>
@endsection