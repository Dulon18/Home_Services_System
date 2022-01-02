@extends("admin.index")
@section('content')
<h2>Service Info</h2>
<br>

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
5
<form action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Service name</label>
    <input required name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input required name='price' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
        <input name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
   <a href="{{route('admin.services')}}" type="button" class="btn btn-danger">Back</a>
</form>


@endsection