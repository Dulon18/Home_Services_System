@extends('frontend.master')
@section('content')
<?php
    $order= rand(100000,999999);
?>

<form action="{{route('Orderinfo')}}" method='POST' enctype="multipart/form-data">
  @csrf
{{auth()->user()->id}}

<select name="area" >
  <option value="1">Uttara</option>
</select>
<input type="text"name="sector" placeholder="Sector">
<input type="text"name="addrees"placeholder="Address">
<input type="date"name="requestdate">




<input type="text" name="ordernumber" value="<?php echo"$order"?>" hidden>
<input type="text" name="userid" value="{{auth()->user()->id}}" hidden>

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
     $priceValue=0;
     @endphp
        @foreach($carts as $key=>$data)
            <th scope="row">{{$i++}}</th>
            
          <td class="cart-image">
            <img src="{{url('/uploads/'.$data['image'])}}" width="100px" alt="plz..upload">
          </td>
          <input type="text" name="serviceId[]" value="{{$data['id']}}" hidden>
          <input type="text" name="quantity[]" value="{{$data['quantity']}}" hidden >

            <td>{{$data['name']}} </td>
            <td>{{$data['price']}}</td>
            <td>{{$data['quantity']}}</td>
            <td>{{$data['price']*$data['quantity']}}</td>
            <?php  $priceValue= $data['price']*$data['quantity']+  $priceValue; ?>
            </tr>
        @endforeach
     @endif
  </tbody>
  
</table>


<input type="text" name="price" value="{{$priceValue}}" >

<button type="submit" class="btn btn-primary pull-right">CheckOut</button>
</form>
@endsection