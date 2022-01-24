@extends("admin.index")
@section('content')
@section('content')

    @if(session()->has('message'))
        <p class="alert alert-success">
            {{session()->get('message')}}
        </p>
    @endif
<h3>Dashboard</h3>
<br>
<div class="row">
<div class="col-sm-4">
    <div class="card text-dark bg-info mb-3" style="max-width: 30rem;">
    <h5 class="card-header" >Customers Details</h5>
      <div class="card-body">
        
        <p class="card-text">{{$count['user']}}</p>
        <a href="{{route('admin.customer')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-success mb-3"  style="max-width: 30rem;">
    <h5 class="card-header">Service Provider Details</h5>
      <div class="card-body">
        <p class="card-text"><b>{{$count['sp']}}</b></p>
        <a href="{{route('admin.serviceProvider.dashboard')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-dark bg-warning mb-3" style="max-width: 30rem;">
    <h5 class="card-header">Services Details</h5>
      <div class="card-body">
        
        <p class="card-text">{{$count['service']}}</p>
        <a href="{{route('admin.services')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
    <h5 class="card-header"> Total Order</h5>
      <div class="card-body">
        
        <p class="card-text">{{$count['order']}}</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3" style="max-width: 30rem;">
    <h5 class="card-header" >Billing Details</h5>
    <p></p>
      <div class="card-body">
        
        <p class="card-text"></p>
        <a href="{{route('admin.bill')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
    <h5 class="card-header" >Rating Details</h5>
      <div class="card-body">
       
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