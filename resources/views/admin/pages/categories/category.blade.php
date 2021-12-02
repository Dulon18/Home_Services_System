@extends("admin.index")
@section('content')

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
    </tr>
    @endforeach
  </tbody>
</table>
@endsection