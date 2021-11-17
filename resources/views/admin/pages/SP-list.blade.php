@extends('admin.index')

@section('content')
<br>

<h1>Service Provider List</h1><br>

<button type="button" class="btn btn-success">Add</button>
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
      <th scope="col">Experiemce</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
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