@extends('admin.index')
@section('content')
<h1>Appliance Services info</h1>
<br>
<!-- error message -->
@if($errors->any())
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
<!-- modal -->
<button type="button" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal">Add</button>
<form action="{{route('admin.applianceService.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appliance Services</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Service name</label>
            <input required name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input required name='price' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input required name='description' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-2">
      <label for="disabledSelect" class="form-label">Add Category</label>
      <select name='category' id="disabledSelect" class="form-select">
          @foreach ($categories as $category)
                
           <option value="{{$category->name}}">{{$category->name}}</option> 
                
            @endforeach
      </select>
      </div>
      <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input required name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- end -->
<br>
<br>
<table class="table">
  <thead>
    <tr class="table-success">
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="row">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($applianc_services as $key=>$ap)
    <tr class="table-secondary">
      <th scope="row">{{$key+1}}</th>
      <td>{{$ap->name}}</td>
      <td>{{$ap->price}}</td>
      <td>{{$ap->description}}</td>
      <td>{{$ap->category}}</td>
      <td>
           <img src="{{url('/uploads/'.$ap->image)}}" width="100px" alt="plz..upload">
        </td>

      <td> 
        <a class='btn btn-primary btn-sm' href="#"><i class="uil uil-eye"></i></a>
        <a class='btn btn-info btn-sm' href="#"><i class="uil uil-edit"></i></a>
        <a class='btn btn-danger btn-sm' href="#"><i class="uil uil-trash-alt"></i></a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

@endsection