@extends('admin.index')
@section('content')
<table class="table">
  <thead>
      
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($book as $key=>$b)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$b->user->id}}</td>
      <td>{{$b->user->name}}</td>
      <td>{{$b->total_price}}</td>
      <td>

                {{$b->status}}

        </td>
        <td>
            @if($b->status!='cancel')
            <a href="{{route('admin.order.cancel',$b->id)}}" class="btn btn-danger">Cancel</a>
            @endif
        </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection