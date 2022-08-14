
@extends("admin.index")
@section('content')
<h2>Category Info</h2>
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

<form action="{{route('admin.update',$category->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name</label>
    <input value="{{$category->name}}" name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input value="{{$category->description}}" name='description' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input  name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$category->image)}}" alt="Image not found">
  </div>

  <button type="submit" class="btn btn-primary">Submit Changes</button>
</form>
@endsection
