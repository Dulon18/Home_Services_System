@extends('admin.index')

@section('content')
<br>

<h1>Service Provider List</h1><br>
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
      </tr>
    @endforeach
    
  </tbody>
</table>

 
@endsection