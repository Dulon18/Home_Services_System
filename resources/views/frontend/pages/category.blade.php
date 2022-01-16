@extends('frontend.master')
@section('content')
<section class="content-central">
            <div class="content_info content_resalt">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="sponsors" class="tooltip-hover">
                            @foreach($categories as $c)
                                <li data-toggle="tooltip" title="" data-original-title={{$c->name}}> <a
                                        href="servicesbycategory/1.html">
                                        <img src="{{url('uploads/'.$c->image)}}"
                                            alt={{$c->name}}></a>
                                            
                                        </li>

                                        <td>
                    <a href="{{route('home.category.services',$c->id)}}" class="btn btn-info">View</a>
                </td>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection