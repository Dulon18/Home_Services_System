@extends("admin.index")
@section('content')
<h1>Service Details</h1>

<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$services->Image)}}" alt="product">
</p>
<p>Services Name: {{$services->name}}</p>
<p>Services Price: <h4><span style="color: orange">BDT {{$services->price}}</span></h4></p>
<p>Services Details: {{$services->description}}</p>
<p>Services Category: {{$services->category}}</p>

<a class="btn btn-danger" type="button" href="{{route('admin.services')}}">Back</a>

<!-- <lable>Services Name:</lable>
<input type="text" class="form-control" value="{{$services->name}}">
<input type="file" class="form-control"> -->
@endsection