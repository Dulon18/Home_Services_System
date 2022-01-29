@extends('frontend.master')
@section('content')
@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif
@if(session()->has('error'))
   <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
<h1>Chart Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Image</th>
      <th scope="col">Service Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sub Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @if($carts)
     @php
     $i=1;
     @endphp
        @foreach($carts as $key=>$data)
            <th scope="row">{{$i++}}</th>
            
          <td class="cart-image">
            <img src="{{url('/uploads/'.$data['image'])}}" width="100px" alt="plz..upload">
          </td>
            
            <td>{{$data['name']}}</td>
            <td>{{$data['price']}}</td>
            <td>{{$data['quantity']}}</td>
            <td>{{$data['price']*$data['quantity']}}</td>
            </tr>
        @endforeach
     @endif
  </tbody>
  
</table>
<a class="btn btn-danger" href="{{route('cart.clear')}}">Clear</a>
<a class="btn btn-info" href="{{route('home.orderform')}}">Purchase Order</a>
@endsection