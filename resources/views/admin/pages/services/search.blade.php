@extends('admin.index')
@section('content')
<h1>Search List</h1><br>
<a href="{{route('admin.services.add')}}" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add</a>
<input class="btn btn-primary" type="button" onClick="Download('divToPrint');" value="Print">        
<br>
<br>
<div id="divToPrint">
<div class="table-responsive">
<table class="table ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Service Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="row">Action</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($services as $key=>$service)

     <tr class="mb-2">
         <th>{{$key+1}}</th>
         <td>{{$service->name}}</td>
         <td>{{$service->price}}</td>
         <td>{{$service->description}}</td>
         <td>{{$service->category->name}}</td>
         <td>
           <img src="{{url('/uploads/'.$service->Image)}}" width="100px" alt="plz..upload">
         </td>
         <td> 
          <a class='btn btn-primary btn-sm' href="{{route('admin.services.details',$service->id)}}"><i class="uil uil-eye"></i></a>
          <a class='btn btn-info btn-sm' href="{{route('admin.services.edit',$service->id)}}"><i class="uil uil-edit"></i></a>
          <a class='btn btn-danger btn-sm' onclick="return confirm('are you sure')" href="{{route('admin.services.delete',$service->id)}}"><i class="uil uil-trash-alt"></i></a>
         </td>
      </tr>
  @endforeach 
  </tbody>
</table>
</div>
</div>
@endsection
<script>
    function Download(divName)
    {
        var downloadContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = downloadContents;
        window.print();
        document.body.innerHTML = originalContents;

    }
</script>
