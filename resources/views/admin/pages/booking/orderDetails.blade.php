@extends('admin.index')
@section('content')
<style>
        .services{
        display: flex;
        flex-direction:row;
        
    }
</style>

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

<div id="divToPrint">
@php
    $subtotal=0;
@endphp    
<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
                <div class="card-header">Order number
                    <strong>#{{$GetOrderitemById->order_number }}</strong>
                    
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Print</a>
                        @if(auth()->user()->role == 'admin')
                        @if($Checkorder!=null)
                        <button type="button" class="btn btn-sm btn-info float-right mr-1 d-print-none">Assigned</button>
                    
                        @else
                        <button type="button" class="btn btn-sm btn-info float-right mr-1 d-print-none"  data-toggle="modal" data-target="#exampleModal">Assign Provider</button>
                        @endif
                    @endif
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-4">
                            <h6 class="mb-3">Customer Details </h6>
                            <div>
                                <strong>{{$customerDetails->name}}</strong>
                            </div>
                            
                            <div>@if($GetOrder->Area == 1)
                                    <p>Area : Uttara </p>
                                    @else
                                    <p>Area : Gulshan </p>
                                    @endif</div>
                                <div>Sector:{{ $GetOrder->Sector }}</div>  
                                <div>Address: {{ $GetOrder->address }}</div>  
                            <div>Email : {{$customerDetails->email}}</div>
                            <div>Phone : {{$customerDetails->phone}}</div>
                           
                        </div>

                        <div class="col-sm-4"></div>

                        <div class="col-sm-4">
                        <h6 class="mb-3"><strong>Provider Details  </strong></h6>

                            @foreach($assignList as $lists)
                                @if($lists->orderId == $GetOrderitemById->order_number)
                                    @foreach($getAssignProvider as $providerItems)
                                            @if($providerItems->id == $lists->providerId)
                                                <div>
                                                    <strong>Name : {{$providerItems->name}}</strong>
                                                </div>
                                                <div>Email : {{$providerItems->email}}</div>  
                                                <div>Phone : {{$providerItems->phone}}</div>  
                                            @endif
                                        
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                      
                        
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>service image</th>
                                    <th>Service name</th>
                                    <th class="center">Quantity</th>
                                    <th class="right">Unit Cost</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($GetOrderitem as $key=>$items)    
                            <tr>
                                <td class="center">{{$key+1}}</td>
                                    <!-- get services imgae and name by id -->
                                    @foreach($services as $service)
                                    @if($service->id == $items->serviceid)
                                    
                                    <td class="left"> 
                                    <div class="services">
                                        <img style="width: 50px; height: 40px ; border-radius:4px;margin-right:10px; margin-bottom:5px;"  src="{{url('uploads/'.$service->Image)}}"  alt="AC Dry Servicing"
                                                                class="img-responsive">          
                                    

                                        </div>
                                    </td>
                                    <td class="left">{{$service->name}}</td>
                                    @endif
                                    @endforeach
                                    <!-- end service data -->
                                    <td class="right">{{$items->quantity}}</td>
                                    <!-- get services unit price by service id -->
                                    @foreach($services as $service)
                                    @if($service->id == $items->serviceid)
                                        <td class="right">{{$service->price}} </td>
                                        @php $total = $service->price*$items->quantity;  @endphp
                                    @endif
                                    @endforeach

                                    <td class="right">@php echo $total; @endphp</td>
                             </tr>   
                             @php $subtotal = $total+$subtotal ; @endphp  
                                
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"></div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Subtotal</strong>
                                        </td>

                                        <td class="right">{{$subtotal}}</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Service Fee</strong>
                                        </td>
                                        <td class="right">BDT 100</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong>BDT {{$GetOrder->total_price}} </strong>
                                        </td>
                                    </tr>    
                                </tbody>
                            </table>
                            
                            <a class="btn btn-success" href="#" data-abc="true">
                                Cash On Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(auth()->user()->role == 'admin')
<a type="button" class="btn btn-danger mt-4" href="{{route('admin.order')}}">Back</a>
@endif
<!-- Modal -->
<form action="{{route('assignProvider')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Service Provider</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Provider</label>
            <select name="providerId" class="form-select" aria-label="Default select example">
                    <option selected> select Provider</option>
                    @foreach($providers as $provider)
                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                  @endforeach
            </select>
            
      </div>
      <input name="orderId" value="{{$GetOrderitemById->order_number }}" type="text" hidden>

     

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

@endsection