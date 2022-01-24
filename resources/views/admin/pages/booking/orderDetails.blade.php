@extends('admin.index')
@section('content')
<table class="table">
  <thead>
      
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order ID</th>
      <th scope="col">Service ID</th>
      <th scope="col">Service Name</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($order_details as $key=>$od)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$od->order->id}}</td>
      <td>{{$od->service->id}}</td>
      <td>{{$od->service->name}}</td>
      <td>{{$od->service->price}}</td>
      <td>{{$od->quantity}}</td>
      <td>{{$od->order->total_price}}</td>
      <td>
          <a type="button" href="" class='btn btn-success'>Approve</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

<div>
            {!! $order_details->links() !!}
        </div>
@endsection