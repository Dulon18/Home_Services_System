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

   <div class="table-responsive">
   <table class="table">
  <thead>
    
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Password</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach($customers as $key=>$customer)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->phone}}</td>
      <td>{{$customer->password}}</td>  
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection