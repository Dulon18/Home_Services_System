@extends('admin.index')
@section('content')

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif
<table class="table">
  <thead>
      
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">Order Number</th>
      <th scope="col">Request Date</th>
      <th scope="col">Service</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($Customerorders as $key=>$items)
    
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$items->orderId}} </td>
      <td>
      {{$items->requestDate}}
      </td>
      
      <td>
          @foreach($CustomerOrderDetails as $orderdetails)
           @if($items->orderId==$orderdetails->order_number)
                @foreach($Services as $services)
                @if($orderdetails->serviceid==$services->id)
                        <div class="services">
                        <img style="width: 50px; height: 40px ; border-radius:4px;margin-right:10px; margin-bottom:5px;"  src="{{url('uploads/'.$services->Image)}}"  alt="AC Dry Servicing"
                                                class="img-responsive">          
                        <p>{{$services->name}}</p>

                        </div>
                    @endif
                @endforeach

            @endif

            <!-- update modal -->
             
            <!-- end -->
          @endforeach
          <!-- customer order details end foreach -->
      </td>
      <td>{{$items->total_price}}</td>
      
      <td>
        @if($items->status==0)
        <a href="{{route('admin.statusForm',$items->orderId)}}" type="button" class="btn btn-primary">panding</a>
        @elseif($items->status==1)
        <a href="{{route('admin.statusForm',$items->orderId)}}" type="button" class="btn btn-success">Accepted</a>
        @elseif($items->status==2)
        <a href="{{route('admin.statusForm',$items->orderId)}}" type="button" class="btn btn-info">Completed</a>
        @elseif($items->status==3)
        <a href="{{route('admin.statusForm',$items->orderId)}}" type="button" class="btn btn-danger">Canceled</a>

        @endif
      </td>
     
        <td>


            <a type="button" href="{{route('admin.orderdetails',$items->orderId)}}" class="btn btn-info">Details</a>
        </td>

    </tr>

  
  @endforeach

  </tbody>
</table>


@endsection