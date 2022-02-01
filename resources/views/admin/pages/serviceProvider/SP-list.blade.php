@extends('admin.index')

@section('content')
<br>

<h1>Service Provider List</h1><br>
<!-- <a href="{{route('admin.serviceProvider.add')}}" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add</a> -->
             
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
     
      <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <!-- <th scope="col">Status</th>
      <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($providersDetails as $key=>$p)

     <tr>
         <th>{{$key+1}}</th>
         <td>{{$p->name}}</td>
       
         <td>{{$p->email}}</td>
         <td>{{$p->phone}}</td>
         <!-- <td>
           @if($p->status==1)
           <a type="button" href="{{route('admin.sprovider.status',$p->id)}}" onclick="return confirm('Are you sure??')" class='btn btn-success'>Active</a>
           @else
           <a type="button" href="{{route('admin.sprovider.status',$p->id)}}" class='btn btn-danger'>Inactive</a>
           @endif
         </td> -->
         <!-- <td>
           
           <a href="{{route('admin.sprovider.view',$p->id)}}" class='btn btn-primary'><i class="uil uil-eye"></i></a>
           <a href="{{route('admin.sprovider.edit',$p->id)}}" class='btn btn-info'><i class="uil uil-edit"></i></a>
           <a href="{{route('admin.sprovider.delete',$p->id)}}"class='btn btn-danger' onclick="return confirm('Are you sure to delete??')"><i class="uil uil-trash-alt"></i></a>
         </td> -->
         
      </tr>

    @endforeach
    
  </tbody>
</table>

 
@endsection