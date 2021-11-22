@extends('admin.index')

@section('content')

<h5>Service Provider info</h5>

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
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input required name="fname"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

   </div>

     <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Last Name</label>
       <input required name="lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
      </div>

      <div  class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Profession</label>
          <input required name ="profession"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
        </div>

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Address</label>
           <input required name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
      </div>
      
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="phn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Experience</label>
    <input type="exp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Salary</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection