@extends("admin.index")
@section('content')
<h3>Dashboard</h3>
<br>
<div class="row">
<div class="col-sm-4">
    <div class="card text-dark bg-info mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Customers Details</h5>
        <p class="card-text">15K+</p>
        <a href="{{route('admin.customer')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-success mb-3"  style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Service Provider Details</h5>
        <p class="card-text"><b>30+</b></p>
        <a href="{{route('admin.serviceProvider.dashboard')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-dark bg-warning mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Services Details</h5>
        <p class="card-text">10+</p>
        <a href="{{route('admin.services')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Booking Info</h5>
        <p class="card-text">125</p>
        <a href="{{route('admin.booking')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Billing Details</h5>
        <p class="card-text">15K+</p>
        <a href="{{route('admin.bill')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Rating Details</h5>
        <p >15K+</p>
        <a href="{{route('admin.rating')}}" class="btn btn-danger">Read More</a>
      </div>
    </div>
  </div>
</div>
@endsection