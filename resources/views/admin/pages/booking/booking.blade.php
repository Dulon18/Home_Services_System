@extends('admin.index')
@section('content')
<h2>Booking List</h2>
<br>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Sector No</th>
      <th scope="col">Area</th>
      <th scope="col">Date</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($book as $key=>$b)
    <tr>
      <th scope="row">1</th>
      <td>{{$key+1}}</td>
      <td>{{$b->order->ordernumber}}</td>
      <td>{{$b->order->name}}</td>
      <td>{{$b->order->area}}</td>
      <td>{{$b-order->addrees}}</td>
      <td>{{$b->total_price}} BDT</td>
      <td>
        {{$b->status}}
      </td>
      
      <td>
        <a type="button" class="btn btn-info" href="">Assign</a>
      </td>
      

    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection