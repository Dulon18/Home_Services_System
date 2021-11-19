@extends('admin.index')

@section('content')
<br>

<h1>Service Provider List</h1><br>
<a href="{{route('admin.serviceProvider.add')}}" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add</a>
<!-- <div class="modal" id="myModal">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">ADD Services provider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body"> -->
              
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
      <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Experience</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>Mark</td>
      <td>Plumber</td>
      <td>Dhaka</td>
      <td>pb@gmail.com</td>
      <td>01624546755</td>
      <td>2years</td>
      <td>8000</td>
      
    </tr>
    
    
  </tbody>
</table>

 
@endsection