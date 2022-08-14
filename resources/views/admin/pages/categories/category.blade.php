@extends("admin.index")
@section('content')
            <!-- message Show start -->
            @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif
                <!-- message Show end -->          
<h2>Category List </h2><br>
<a href="{{route('admin.add')}}" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach($categories as $key=>$category)
      <th>{{$key+1}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td>
        <img src="{{url('/uploads/' .$category->image)}}" width="100px" alt="plz..upload">
      </td>
      <td>
      <a class='btn btn-primary btn-md' href="{{route('admin.edit',$category->id)}}"><i class="uil uil-edit"></i></a>
      <a class='btn btn-danger btn-md' href="{{route('admin.remove',$category->id)}}"><i class="uil uil-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection