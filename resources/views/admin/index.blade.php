<!Doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Admin Pannel</title>
   <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('Backend/assets/css/style-starter.css')}}">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  <!-- icons -->
  <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
  <script defer src="/your-path-to-fontawesome/js/all.js"></script>
</head>
<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
        @include('admin.partials.sidebar')
        <!-- header-starts -->

        <!-- //header-ends -->
        <!-- main content start -->
      <div class="main-content">
      @include('admin.partials.header')
  <!-- content -->
        <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
    

    <!-- statistics data -->

    <!-- //statistics data -->

    <!-- charts -->
    <!-- //charts -->

    <!-- chatting -->
   
    <!-- //chatting -->

    <!-- accordions -->
    <div class="accordions">
      <div class="row">
        <!-- accordion style 1 -->
        <div class="col-lg-12 mb-4">
          <div class="card card_border">
            
            <div class="card-body">
              <div class="accordion" id="accordionExample">
               
                @yield('content')
              </div>
            </div>
          </div>
        </div>
        <!-- //accordion style 1 -->
      </div>
    </div>
    <!-- //accordions -->

    <!-- modals -->
   <!-- Modal -->
                  
    <!-- //modals -->

  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2021 Collective. All Rights Reserved | Design by <a href="#" target="_blank"
      class="text-primary">Angels Arms Team.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="{{url('Backend/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('Backend/assets/js/jquery-1.10.2.min.js')}}"></script>

<!-- chart js -->
<!-- <script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script> -->
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<!-- <script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script> -->
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="{{url('Backend/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{url('Backend/assets/js/scripts.js')}}"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="{{url('Backend/assets/js/modernizr.js')}}"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
crossorigin="anonymous"></script> -->

</body>

</html>
  