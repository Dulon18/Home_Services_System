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
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Profession</th>
      <th scope="col">Address</th>
      <!-- <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Experience</th>
      <th scope="col">Salary</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($providers as $key=>$p)

     <tr>
         <th>{{$key+1}}</th>
         <td>{{$p->fname}}</td>
         <td>{{$p->lname}}</td>
         <td>{{$p->profession}}</td>
         <td>{{$p->address}}</td>
      </tr>
    @endforeach
    
  </tbody>
</table>

 
@endsection