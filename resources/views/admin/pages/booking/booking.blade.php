@extends('admin.index')
@section('content')
<h2>Booking List</h2>
<br>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Service Name</th>
      <th scope="col">House No.</th>
      <th scope="col">Road No.</th>
      <th scope="col">Block No</th>
      <th scope="col">Sector No</th>
      <th scope="col">Area</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>
        <a type="button" class="btn btn-info" href="">Assign</a>
      </td>
      

    </tr>
    
  </tbody>
</table>
@endsection