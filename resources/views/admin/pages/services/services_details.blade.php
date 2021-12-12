@extends("admin.index")
@section('content')
<h1>service Details</h1>

<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$services->Image)}}" alt="product">
</p>
<p>Product Name: {{$services->name}}</p>
<p>Product Price: <h4><span style="color: orange">BDT {{$services->price}}</span></h4></p>
<p>Product Details: {{$services->description}}</p>
<p>Product Category: {{$services->category}}</p>

<a class="btn btn-danger" type="button" href="{{route('admin.services')}}">Back</a>

<!-- <lable>Services Name:</lable>
<input type="text" class="form-control" value="{{$services->name}}">
<input type="file" class="form-control"> -->
@endsection