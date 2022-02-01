@extends('admin.index')
@section('content')
<h1>Order Report</h1>

<div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center"></h2>
      <div class="card-body py-md-4">
       <form  action="{{route('admin.bill')}}" method="GET" >
          @csrf

            <div class="form-group">
            <input name="from" type="date" class="form-control"class="form-control" >
            </div>
            <div class="form-group">
               <input name="to" type="date" class="form-control" >
            </div>
            <div class="d-flex flex-row align-items-center justify-content-between">
               
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
       </form>

     </div>
  </div>
</div>
</div>
<div>
</div>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Order ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
    @foreach($getdate as $key=>$data)

      <th scope="row">{{$key+1}}</th>
      <td>{{$data->orderId}}</td>
      <td>{{$data->customer_id}}</td>
      <td>{{$data->total_price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection


