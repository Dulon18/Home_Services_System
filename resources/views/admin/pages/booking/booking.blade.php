@extends('admin.index')
@section('content')
<h2>Booking List</h2>
<br>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Service</th>
      <th scope="col">Location</th>
      <th scope="col">Quantity</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>AC installation</td>
      <td>Tongi</td>
      <td>1</td>

    </tr>
    
  </tbody>
</table>
@endsection