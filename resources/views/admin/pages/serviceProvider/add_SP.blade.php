@extends('admin.index')

@section('content')

<h3>Service Provider info</h3>
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

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

<form  action="{{route('admin.sp.store')}}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input required name="name"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

      <div  class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Profession</label>
          <input required name ="profession"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
        </div>

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Address</label>
           <input required name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input required name ="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input required name ="phn" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Experience</label>
    <input required name ="exp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Salary</label>
    <input required name ="salary" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input name='image' type="file" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('admin.serviceProvider.dashboard')}}" type="button" class="btn btn-danger">Back</a>
</form>
@endsection