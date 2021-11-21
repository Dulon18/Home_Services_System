@extends("admin.index")
@section('content')
<h2>Service Info</h2>
<br>
<form action="{{route('admin.service.store')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Service name</label>
    <input name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input name='price' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input name='description' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
      <label for="disabledSelect" class="form-label">Add Category</label>
      <select name='category' id="disabledSelect" class="form-select">
          @foreach ($categories as $category)
                
           <option value="{{$category->name}}">{{$category->name}}</option> 
                
            @endforeach
      </select>
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection