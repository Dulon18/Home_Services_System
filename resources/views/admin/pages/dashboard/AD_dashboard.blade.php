@extends("admin.index")
@section('content')
@section('content')

    @if(session()->has('message'))
        <p class="alert alert-success">
            {{session()->get('message')}}
        </p>
    @endif
<h3>Dashboard</h3>
<br>

<div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">{{$count['user']}}</h3>
                <p class="stat-text">Total Customers</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-eye"> </i>
                <h3 class="text-secondary number">{{$count['service']}}</h3>
                <p class="stat-text">Total Services</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-success number">{{$totalprovider}}</h3>
                <p class="stat-text">Service Provider</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-store"> </i>
                <h3 class="text-danger number">{{$count['order']}}</h3>
                <p class="stat-text">Total Booking</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-store"> </i>
                <h3 class="text-danger number">{{$today}}</h3>
                <p class="stat-text">Today Booking</p>
              </div>
          </div>

          <div class="col-sm-3 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-store"> </i>
                <h3 class="text-danger number">{{$yesterday}}</h3>
                <p class="stat-text">Yesterday Booking</p>
              </div>
          </div>
        {{--  @php 
              $total = 0;
            @endphp
            @foreach($lastWeek as $item)
              @php $total = $item->total_price+$total; @endphp
            @endforeach
          <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-5">
                <i class="lnr lnr-store"> </i>
                <h3 class="text-danger number">{{$total}}</h3>
                <p class="stat-text">Last 7 Day order amount</p>
              </div> --}}
          </div>
        
      </div>


      <!-- charts -->
    <div class="chart">
      <div class="row">

        <div class="col-lg-6 pl-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Booking Status Report
            </div>
            <div class="card-body">
              <!-- line chart -->
              <div id="container">
              <html>
                <head>
                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                            google.charts.load("current", {packages:["corechart"]});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                              var data = google.visualization.arrayToDataTable([
                                ['Task', 'Hours per Day'],
                                
                                ['Pandding', {{$totalpandingTask}}],
                                ['Complete', {{$totalComplateTask}}],
                                ['Cancel',  {{$totalcancelTask}}],
                                ['Aceept',{{$totalacceptTask}}]
                              ]);

                              var options = {
                                title: 'Current booking Status',
                                is3D: true,
                              };

                              var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                              chart.draw(data, options);
                            }
                      </script>
                </head>
                    <body>
                      <div id="piechart_3d" ></div>
                    </body>
              </html>
                
              </div>
              <!-- //line chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated just now
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //charts -->

  
    </div>
    
@endsection
