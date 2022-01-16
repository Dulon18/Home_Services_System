 @extends('frontend.master')
@section('content')
<!-- <div class="section-title-01 honmob">
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
        </div>  -->
 <!-- invoice     -->
 
 <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

p {
    margin: 0
}

.container2 {
    max-width: 900px;
    margin: 30px auto;
    background-color: #e8eaf6;
    padding: 35px
}

.box-right {
    padding: 30px 25px;
    background-color: white;
    border-radius: 15px
}

.box-left {
    padding: 20px 20px;
    background-color: white;
    border-radius: 15px
}

.textmuted {
    color: #7a7a7a
}

.bg-green {
    background-color: #d4f8f2;
    color: #06e67a;
    padding: 3px 0;
    display: inline;
    border-radius: 25px;
    font-size: 11px
}

.p-blue {
    font-size: 14px;
    color: #1976d2
}

.fas.fa-circle {
    font-size: 12px
}

.p-org {
    font-size: 14px;
    color: #fbc02d
}

.h7 {
    font-size: 15px
}

.h8 {
    font-size: 12px
}

.h9 {
    font-size: 10px
}

.bg-blue {
    background-color: #dfe9fc9c;
    border-radius: 5px
}

.form-control {
    box-shadow: none !important
}

.card input::placeholder {
    font-size: 14px
}

::placeholder {
    font-size: 14px
}

input.card {
    position: relative
}

.far.fa-credit-card {
    position: absolute;
    top: 10px;
    padding: 0 15px
}

.fas,
.far {
    cursor: pointer
}

.cursor {
    cursor: pointer
}

.btn.btn-primary {
    box-shadow: none;
    height: 40px;
    padding: 11px
}

.bg.btn.btn-primary {
    background-color: transparent;
    border: none;
    color: #1976d2
}

.bg.btn.btn-primary:hover {
    color: #539ee9
}

@media(max-width:320px) {
    .h8 {
        font-size: 11px
    }

    .h7 {
        font-size: 13px
    }

    ::placeholder {
        font-size: 10px
    }
}
</style>


 <div class="container">
    <div class="row m-0">
        <div class="col-md-7 col-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="row box-right">
                        <div class="col-md-8 ps-0 ">
                        <p class="h1 fw-bold d-flex"> <span class=" fas fa-dollar-sign textmuted pe-1 h6 align-text-top mt-1"></span>Schedule</p>
                            <p class="ps-3 textmuted fw-bold h6 mb-0">
                                Expert will arrive at your given address within 5:00 PM
                                    <!-- Example single danger button -->
                                    <div class="mb-2">
                                        <input required name='date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <br>
        
                                   
                                    </div>
                                 <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Time</option>
                                    <option value="1">9am-10am</option>
                                    <option value="2">11am-12pm</option>
                                    <option value="3">2pm-3pm</option>
                                    <option value="4">5pm-6pm</option>
                                    <option value="5">6pm-7pm</option>
                                </select>
                                    
                            </p>

                            <!-- <p class="h1 fw-bold d-flex"> <span class=" fas fa-dollar-sign textmuted pe-1 h6 align-text-top mt-1"></span>2-4pm | <span class="textmuted">Date</span> Edit</p> -->
                           
                        </div>     
                    </div>
                </div>
                <div class="col-12 px-0 mb-4">
                    <div class="box-right">
                        <div class="d-flex pb-2">
                        <p class="h1 fw-bold d-flex"> <span class=" fas fa-dollar-sign textmuted pe-1 h6 align-text-top mt-1"></span>Contact Person</p>
                        <p class="p-blue">Expert will contact with the following person</p>
                        </div>
                        <form class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-3">
                                <label class="visually-hidden" for="specificSizeInputName">Name</label>
                                <input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">
                            </div>
                            <div class="col-sm-3">
                                <label class="visually-hidden" for="specificSizeInputGroupUsername">Phone</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="01624570988">
                                </div>
                            </div>
                        </form>
                        <div class="bg-blue p-2">
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="box-right">
                        <div class="d-flex mb-2">
                            <h1 class="fw-bold">Address</h1>
                           
                            <form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">House No.</label>
    <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Road No. / Name</label>
    <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
  </div>
   
  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">Area</label>
    <input type="text" class="form-control" id="validationDefault03" required>
    
  </div>

  <div class="col-md-4">
  <br>
    <label for="validationDefault05" class="form-label">Block No.</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-md-4">
  <br>
    <label for="validationDefault05" class="form-label">Sector No.</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  
  <div class="col-md-5"><br>
    <button class="btn btn-primary" type="submit">Save</button>
  </div>
</form>
</div>
                       
                       
                            
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-12 ps-md-5 p-3 ">
            <div >
                <p class="textmuted h1">Order Summary</p>
                <p class="fw-bold h7">Alex Parkinson</p>
                <p class="textmuted h8">3897 Hickroy St, salt Lake city</p>
                <p class="textmuted h8 mb-2">Utah, United States 84104</p>
                <div class="h8">
                    <div class="row m-0 border mb-3">
                        <div class="col-6 h8 pe-0 ps-2">
                            <p class="textmuted py-2">Items</p> <span class="d-block py-2 border-bottom">Legal Advising</span> <span class="d-block py-2">Expert Consulting</span>
                        </div>
                        <div class="col-2 text-center p-0">
                            <p class="textmuted p-2">Qty</p> <span class="d-block p-2 border-bottom">2</span> <span class="d-block p-2">1</span>
                        </div>
                        <div class="col-2 p-0 text-center h8 border-end">
                            <p class="textmuted p-2">Price</p> <span class="d-block border-bottom py-2"><span class="fas fa-dollar-sign"></span>500</span> <span class="d-block py-2 "><span class="fas fa-dollar-sign"></span>400</span>
                        </div>
                        <div class="col-2 p-0 text-center">
                            <p class="textmuted p-2">Total</p> <span class="d-block py-2 border-bottom"><span class="fas fa-dollar-sign"></span>1000</span> <span class="d-block py-2"><span class="fas fa-dollar-sign"></span>400</span>
                        </div>
                    </div>
                    <div class="d-flex h7 mb-2">
                        <p class="">Total Amount</p>
                        <p class="ms-auto"><span class="fas fa-dollar-sign"></span>1400</p>
                    </div>
                    <div class="h8 mb-5">
                        <p class="textmuted">Lorem ipsum dolor sit amet elit. Adipisci ea harum sed quaerat tenetur </p>
                    </div>
                </div>
                <div class="">
                    <p class="h7 fw-bold mb-1">Pay this Invoice</p>
                    <p class="textmuted h8 mb-2">Make payment for this invoice by filling in the details</p>
                    <div class="form">
                        <div class="row">
                            <div class="col-12">
                                <div class="card border-0"> <input class="form-control ps-5" type="text" placeholder="Card number"> <span class="far fa-credit-card"></span> </div>
                            </div>
                            <div class="col-6"> <input class="form-control my-3" type="text" placeholder="MM/YY"> </div>
                            <div class="col-6"> <input class="form-control my-3" type="text" placeholder="cvv"> </div>
                            <p class="p-blue h8 fw-bold mb-3">MORE PAYMENT METHODS</p>
                        </div>
                        <div class="btn btn-primary d-block h8">PAY <span class="fas fa-dollar-sign ms-2"></span>1400<span class="ms-3 fas fa-arrow-right"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection