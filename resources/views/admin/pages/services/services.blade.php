@extends('admin.index')
@section('content')
<h1>Service List</h1><br>
<a href="{{route('admin.services.add')}}" class="btn btn-secondary" >Add</a>
             
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
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="row">Action</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($services as $key=>$service)

     <tr class="mb-2">
         <th>{{$key+1}}</th>
         <td>{{$service->name}}</td>
         <td>{{$service->price}}</td>
         <td>{{$service->description}}</td>
         <td>{{$service->category->name}}</td>
         <td>
           <img src="{{url('/uploads/'.$service->Image)}}" width="100px" alt="plz..upload">
         </td>
         <td> 
          <a class='btn btn-primary btn-sm' href="{{route('admin.services.details',$service->id)}}"><i class="uil uil-eye"></i></a>
          <a class='btn btn-info btn-sm' href="{{route('admin.services.edit',$service->id)}}"><i class="uil uil-edit"></i></a>
          <a class='btn btn-danger btn-sm' href="{{route('admin.services.delete',$service->id)}}" onclick="return confirm('Are you sure to Delete??')"><i class="uil uil-trash-alt"></i></a>
         </td>
      </tr>
    @endforeach
    
  </tbody>
</table>
</div>
 @endsection
