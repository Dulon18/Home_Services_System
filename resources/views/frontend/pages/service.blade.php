@extends('frontend.master')
@section('content')
<h1>Service List</h1><br>
            
<br>
<br>
<div class="table-responsive">
<table class="table ">
  <thead>
    <tr class="table-secondary">
      <th scope="col">ID</th>
      <th scope="col">Service Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      
     
    </tr>
  </thead>
  <tbody>
    @foreach($service as $key=>$s)

     <tr class="mb-2">
         <th>{{$key+1}}</th>
         <td>{{$s->name}}</td>
         <td>{{$s->price}}</td>
         <td>{{$s->description}}</td>
         <td>
           <img src="{{url('/uploads/'.$s->Image)}}" width="100px" alt="plz..upload">
         </td>
         <td>
            <a href="{{route('home.category.services',$s->id)}}" class="btn btn-info">View</a>
         </td>
         
      </tr>
    @endforeach
    
  </tbody>
</table>
</div>
 @endsection
