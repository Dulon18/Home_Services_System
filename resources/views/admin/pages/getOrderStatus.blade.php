@extends('admin.index')
@section('content')
@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

<form action="{{route('status.update',$getCurrentStatus->orderId)}}" method="POST" enctype="multipart/form-data">
                  @csrf
               
                  @method('put')
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"> Update Order Status</h5>
                        </div>
                        <div class="modal-body">
                          
                        <div class="mb-2">
                              <label for="exampleInputEmail1" class="form-label">Provider</label>
                              <select name="statusValue" class="form-select" aria-label="Default select example">
                             
                              @if($getCurrentStatus->status==0)
                               <option value="0">Pending</option>
                                @elseif($getCurrentStatus->status==1)
                                <option value="1">Accepted</option>
                                @elseif($getCurrentStatus->status==2)
                                <option value="2">Complete</option>
                                @elseif($getCurrentStatus->status==3)
                                <option value="3">Cancle</option>

                             @endif
                                        <option value="1">Accepted</option>
                                        <option value="2">Complete</option>
                                        <option value="3">Cancle</option>
                                  
                              </select>
                              
                        </div>
                        </div>
                        <div class="modal-footer">
                          
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                  
                  </form>

@endsection