@extends('admin.index')

@section('content')
<br>

<h1>Search Provider List</h1><br>
<a href="{{route('admin.serviceProvider.add')}}" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add</a>
             
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Profession</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Experience</th>
      <th scope="col">Salary</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($providers as $key=>$p)

     <tr>
         <th>{{$key+1}}</th>
         <td>{{$p->name}}</td>
         <td>{{$p->profession}}</td>
         <td>{{$p->address}}</td>
         <td>{{$p->email}}</td>
         <td>{{$p->phn}}</td>
         <td>{{$p->exp}}</td>
         <td>{{$p->salary}}</td>
         <td>
         <img src="{{url('/uploads/'.$p->image)}}" width="90px" alt="plz..upload">
         </td>
         <td>
           <a href="{{route('admin.sprovider.view',$p->id)}}" class='btn btn-success'><i class="uil uil-eye"></i></a>
           <a href="{{route('admin.sprovider.edit',$p->id)}}" class='btn btn-info'><i class="uil uil-edit"></i></a>
           <a href="" class='btn btn-danger'><i class="uil uil-trash-alt"></i></a>
         </td>
         
      </tr>

    @endforeach
    
  </tbody>
</table>

 
@endsection