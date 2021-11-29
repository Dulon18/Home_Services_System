@extends('admin.index')

@section('content')

<h3><b>Customer Details</b></h3>
<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  action="{{route('admin.sp.store')}}" method="POST">
   @csrf
   <div class="table-responsive">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone Number</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Dhaka</td>
      <td>mark@gmail.com</td>
      <td>m123Er</td>
      <td>0123745986</td>
      
    </tr>
  </tbody>
</table>
</div>
@endsection