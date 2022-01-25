@extends('admin.index')
@section('content')


<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Service ID</th>
                <th>Service Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order_details as $key=>$od)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$od->order->id}}</td>
                <td>{{$od->service->id}}</td>
                <td>{{$od->service->name}}</td>
                <td>{{$od->service->price}}</td>
                <td>{{$od->quantity}}</td>
                <td>{{$od->total_price}}</td>
                <td>
                   <a href="#" class="btn btn-success">Assign</a>
                </td>
            </tr>
           @endforeach
        </tbody>
        <tfoot>
            <!-- <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr> -->
        </tfoot>
    </table>

<script>
  $(document).ready(function() {
    var table = $('#example').DataTable( {
        fixedHeader: true
    } );
} );
</script>
@endsection