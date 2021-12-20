@extends('admin.index')

@section('content')

    @if(session()->has('message'))
        <p class="alert alert-success">
            {{session()->get('message')}}
        </p>
    @endif
    <h1>
        Dashboard
    </h1>
@endsection