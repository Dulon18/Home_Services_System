@extends("admin.index")
@section('content')

<div id="divToPrint">
<h1>Service Details</h1>

<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$services->Image)}}" alt="product">
</p>
<p>Services Name: {{$services->name}}</p>
<p>Services Price: <h4><span style="color: orange">BDT {{$services->price}}</span></h4></p>
<p>Services Details: {{$services->description}}</p>
<p>Services Category: {{$services->category}}</p>

</div>

<a class="btn btn-danger" type="button" href="{{route('admin.services')}}">Back</a>
<input class="btn btn-primary" type="button" onClick="Download('divToPrint');" value="Download">

<!-- <lable>Services Name:</lable>
<input type="text" class="form-control" value="{{$services->name}}">
<input type="file" class="form-control"> -->
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