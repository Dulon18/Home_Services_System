@extends('admin.index')
@section('content')
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img  src=" {{url('/uploads/'.$Sprovider->image)}}" alt="product">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$Sprovider->name}}</h5>
        <p class="card-text">Profession : {{$Sprovider->profession}}</p>
        <p class="card-text">Address : {{$Sprovider->address}}</p>
        <p class="card-text">Emaile:{{$Sprovider->email}}</p>
        <p class="card-text">Mobile : {{$Sprovider->phn}}</p>
        <p class="card-text">Experience : {{$Sprovider->exp}}</p>
        <p class="card-text">Salary : {{$Sprovider->salary}}</p>
        <a type="button" class="btn btn-danger" href="{{route('admin.serviceProvider.dashboard')}}">Back</a>
        
      </div>
    </div>
  </div>
</div>
@endsection