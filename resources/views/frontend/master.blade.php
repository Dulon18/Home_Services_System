
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Online Service Provider for your House Needs</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url('frontend/assets/img/favicon.png')}}">
    <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('frontend/assets/css/chblue.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('frontend/assets/css/theme-responsive.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('frontend/assets/css/dtb/jquery.dataTables.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('frontend/assets/css/select2.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('frontend/assets/css/toastr.min.css')}}" rel="stylesheet" media="screen">        
    <script type="text/javascript" src="{{url('frontend/assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/jquery-ui.1.10.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/modernizr.js')}}"></script>
</head>
<body>
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')
    <script type="text/javascript" src="{{url('frontend/assets/js/nav/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/totop/jquery.ui.totop.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/accordion/accordion.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/maps/gmap3.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/fancybox/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/carousel/carousel.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/filters/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/twitter/jquery.tweet.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/flickr/jflickrfeed.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/theme-options/theme-options.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/theme-options/jquery.cookies.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/bootstrap/bootstrap-slider.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/dtb/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/dtb/jquery.table2excel.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/dtb/script.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/validation-rule.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/bootstrap3-typeahead.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/main.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>
</body>
</html>