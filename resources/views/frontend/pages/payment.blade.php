@extends('frontend.master')
@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
    body {
    background-color: #eee
}

.container1 {
    height: 100vh
}

.card {
    border: none
}

.form-control {
    border-bottom: 2px solid #eee !important;
    border: none;
    font-weight: 600
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none;
    border-radius: 0px;
    border-bottom: 2px solid blue !important
}

.inputbox {
    position: relative;
    margin-bottom: 20px;
    width: 100%
}

.inputbox span {
    position: absolute;
    top: 7px;
    left: 11px;
    transition: 0.5s
}

.inputbox i {
    position: absolute;
    top: 13px;
    right: 8px;
    transition: 0.5s;
    color: #3F51B5
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.inputbox input:focus~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.inputbox input:valid~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.card-blue {
    background-color: #492bc4
}

.hightlight {
    background-color: #5737d9;
    padding: 10px;
    border-radius: 10px;
    margin-top: 15px;
    font-size: 14px
}

.yellow {
    color: #fdcc49
}

.decoration {
    text-decoration: none;
    font-size: 14px
}

.btn-success {
    color: #fff;
    background-color: #492bc4;
    border-color: #492bc4
}

.btn-success:hover {
    color: #fff;
    background-color: #492bc4;
    border-color: #492bc4
}

.decoration:hover {
    text-decoration: none;
    color: #fdcc49
}
</style>
<div class="container1 mt-4 px-5 center">
    <div class="mb-4 align-items-center">
        <h2>Confirm order and pay</h2> <span>please make the payment, after that you can enjoy all the features and benefits.</span>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3">
                <h6 class="text-uppercase">Payment details</h6>
                <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4">
                    <h6 class="text-uppercase">Billing Address</h6>
                    <p>Expert will arrive at your given address within given time and date</p>
                    <div class="row mt-3">
                    <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> Select Date
                                <input type="date" name="name" class="form-control" required="required"> <span></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2">Selet Time(Provider reach)
                                <input type="time" name="name" class="form-control" required="required"> <span></span> </div>
                        </div>

                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>House No.</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Road No. </span> </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Area</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Block No.</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Sector No.</span> </div>
                        </div>
                       
                    </div>
                    <a type="button" class="btn btn-info" href="">Save</a>
                </div>
            </div>
            <div class="mt-4 mb-4 d-flex justify-content-between"> <span>Previous step</span> <button class="btn btn-success px-3">Pay $840</button> </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="card card-blue p-3 text-white mb-3"> <span>You have to pay</span>
                <div class="d-flex flex-row align-items-end mb-3">
                    <h1 class="mb-0 yellow">$549</h1> <span>.99</span>
                </div> <span>Enjoy all the features and perk after you complete the payment</span> <a href="#" class="yellow decoration">Know all the features</a>
                <div class="hightlight"> <span>100% Guaranteed support and update for the next 5 years.</span> </div>
            </div>
        </div> -->
    </div>
</div>
@endsection

