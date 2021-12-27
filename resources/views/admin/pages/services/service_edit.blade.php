@extends("admin.index")
@section('content')
<h2> Update Service Info</h2>
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

<form action="{{route('admin.services.update',$service->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')

  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Service name</label>
    <input value="{{$service->name}}" required name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input value="{{$service->price}}" required name='price' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input value="{{$service->description}}" required name='description' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
      <label for="disabledSelect" class="form-label">Add Category</label>
      <select value="{{$service->category}}" name='category' id="disabledSelect" class="form-select">
          @foreach ($categories as $category)
                
           <option value="{{$category->name}}">{{$category->name}}</option> 
                
          @endforeach
      </select>
    </div>
        <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$service->Image)}}" alt="product">
      </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{route('admin.services')}}" type="button" class="btn btn-danger">Back</a>
</form>
@endsection
