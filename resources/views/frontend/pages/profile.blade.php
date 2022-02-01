<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

@extends('frontend.master')
@section('content')
<style type="text/css">
  body{
      margin-top:20px;
      color: #1a202c;
      text-align: left;
      background-color: #e2e8f0;    
  }
  .main-body {
      padding: 15px;
  }
  .card {
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
  }

  .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0,0,0,.125);
      border-radius: .25rem;
  }

  .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
  }

  .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
  }

  .gutters-sm>.col, .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
  }
  .mb-3, .my-3 {
      margin-bottom: 1rem!important;
  }

  .bg-gray-300 {
      background-color: #e2e8f0;
  }
  .h-100 {
      height: 100%!important;
  }
  .shadow-none {
      box-shadow: none!important;
  }
  /* core styles for table */

  .table{
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
    background-color: var(--tableBgColor, #fff);
  }

  .table__thead{
    background-color: var(--tableTitleBgColor);
    color: var(--tableTitleTextColor);
  }

  .table__mobile-caption{
    display: none;
  }

  .table__td, .table__th{
    padding: var(--tableCellPadding, 20px);
    box-sizing: border-box;
  }

  @media screen and (min-width: 769px){

    .table__tr:hover{
      background-color: var(--tableRowBgColorHover);
    }

    .table__td:first-child, .table__th:first-child{
      width: 30%;
      text-align: left;
    }

    .table__td, .table__th{
      text-align: center;
    }
  }

  @media screen and (max-width: 768px){

    .table, .table__thead, .table__tbody, .table__tr{
      display: block;
    }

    .table__td{
      display: flex;
    }

    .table__head{
      display: none;
    }

    .table__mobile-title{
      background-color: var(--tableTitleBgColor);
      color: var(--tableTitleTextColor);
    }

    .table__td{
      border-bottom: 1px solid var(--tableSeparatorColor);
    }

    .table__td:last-of-type{
      border-bottom: none;
    }

    .table__mobile-caption, .table__value{
      display: block;
      width: 50%;
      box-sizing: border-box;
    }

    .table__mobile-caption{
      padding-right: 2%;
    }
  }

  /* demo styles for table */

  .table{
    --tableCellPadding: 2rem;
    --tableTitleBgColor: #5668ca;
    --tableTitleTextColor: #fff;
    --tableRowBgColorHover: #f0f0f0;
    --tableSeparatorColor: #eee;
  }

  /*
  * demo page
  */

  @media screen and (min-width: 768px){

    html{
     
    }
  }

  @media screen and (max-width: 767px){

    html{
      
    }
  }

  body{
  
  }

  a{
    text-decoration: none;
    color: #5668ca;
  }

  a:hover, a:focus{
    text-decoration: underline;
  }

  .page{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
  }

  .page__demo{
    flex-grow: 1;
  }

  .main-container{
    padding-left: 1rem;
    padding-right: 1rem;
    max-width: 1000px;
    
    margin-right: auto;
    margin-left: auto;
  }

  .page__container{
    margin-top: 4rem;
    margin-bottom: 4rem;
  }

  .footer{
    padding-top: 1rem;
    padding-bottom: 1rem;
    text-align: center;  
    font-size: 1.4rem;
  }

  @media screen and (min-width: 641px){

    .footer__container{
      display: flex;
      justify-content: space-between;
    }

    .melnik909{
      margin-left: 2rem;
    }  
  }

  @media screen and (max-width: 640px){

    .melnik909{
      display: none;
    } 
  }




  
</style>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth()->user()->name}}</h4>
                      <p class="text-secondary mb-1">{{auth()->user()->role}}</p>
                      <p class="text-muted font-size-sm">Uttara, Dhaka</p>
                      <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="card mt-3">
                <ul class="list-group list-group-flush">

                 
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                 
                </ul>
              </div> -->
            </div>
          
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                  
                    <div class="col-sm-3">
                  
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{auth()->user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{auth()->user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    0{{auth()->user()->phone}}
                    </div>
                  </div>
                  <!-- <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{auth()->user()->address}}
                    </div>
                  </div> -->
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="#">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              <table class="table">
        <thead class="table__thead">
          <tr class="table__head">
            <th class="table__th">Order Number</th>
            <th class="table__th">Request</th>
            <th class="table__th">Task Status</th>
            <th class="table__th">Action</th>
          </tr>
          </thead>
          <tbody class="table__tbody">
          @foreach($assignList as $items)
                    @if($items->providerId == auth()->user()->id)
                    <!-- Getting order -->
                      @foreach($GetOrder as $orders)
                        @if($orders->orderId==$items->orderId)
                          <tr>
                          <tr class="table__tr">
                            <td class="table__td table__mobile-title">
                              <span>#{{$orders->orderId}}</span>
                            </td>
                            <td class="table__td">

                            </td>
                            <td class="table__td">
                              <select id="mounth">
                                <option value="hide">Padding</option>
                                <option value="january">Processing</option>
                                <option value="february">Complete</option>
                              </select> 
                            </td>
                            <td class="table__td">
                              
                              <span class="table__value"><a href="{{route('provider.assignorder',$orders->orderId)}}"> details </a> </span>
                            </td>
                          </tr>
                            <!-- <td>{{$orders->orderId}} </td>
                            <td>{{$orders->total_price}} </td>
                            <td>{{$orders->customer_id}} </td> -->
                        @endif
                      @endforeach
                    @endif
                @endforeach
          </tbody>
      </table>
              
              <!-- <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  -->
              
            </div>
          </div>
        </div>
    </div>
</body>
@endsection