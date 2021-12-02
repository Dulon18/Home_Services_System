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
        <p class="card-text"></p>
        <a href="{{route('admin.booking')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Billing Details</h5>
        <p class="card-text"></p>
        <a href="{{route('admin.bill')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Rating Details</h5>
        <p ></p>
        <a href="{{route('admin.rating')}}" class="btn btn-danger">Read More</a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">29.75 M</h3>
                <p class="stat-text">Total Customers</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-eye"> </i>
                <h3 class="text-secondary number">51.25 K</h3>
                <p class="stat-text">Total Services</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-success number">166.89 M</h3>
                <p class="stat-text">Service Provider</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-store"> </i>
                <h3 class="text-danger number">1,250k</h3>
                <p class="stat-text">Billing Details</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-store number">1,250k</h3>
                <p class="stat-text">Booking Details</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> -->
@endsection