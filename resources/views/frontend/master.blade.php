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
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+880-1624781461"><i class="fa fa-phone"></i> +880-1624781461</a></li>
                            <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                    contact@angelsarms.in</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                    +880-1624781461</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Dhaka, Bangladesh</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-right">
                            <li><i class="fa fa-comment"></i> Live Chat</li>
                            <li><a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i> Dhaka,
                                    Bangladesh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
           <!-- header start -->

        @include('frontend.partials.header')
        <section class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                   <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/4.jpg')}}" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/2.jpg')}}" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{url('frontend/assets/img/slide/1.jpg')}}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h2 style="color:#ff9933;">BOOK A SERVICE</h2>
                    <p style="color:#fff;"class="lead">Book a service at very affordable price, </p>
                </div>
                <div class="filter-header">
                    <form id="sform" action="searchservices" method="post">                        
                        <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
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
                                <li data-toggle="tooltip" title="" data-original-title="AC"> <a
                                        href="servicesbycategory/1.html"><img src="{{url('frontend/images/sercat/1.png')}}"
                                            alt="AC"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Beauty"> <a
                                        href="servicesbycategory/2.html"><img src="{{url('frontend/images/sercat/2.png')}}"
                                            alt="Beauty"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Plumbing"> <a
                                        href="servicesbycategory/3.html"><img src="{{url('frontend/images/sercat/3.png')}}"
                                            alt="Plumbing"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Electrical"> <a
                                        href="servicesbycategory/4.html"><img  src="{{url('frontend/images/sercat/4.png')}}"
                                            alt="Electrical"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Shower Filter"> <a
                                        href="servicesbycategory/5.html"><img src="{{url('frontend/images/sercat/5.png')}}"
                                            alt="Shower Filter"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Home Cleaning"> <a
                                        href="servicesbycategory/6.html"><img src="{{url('frontend/images/sercat/6.png')}}"
                                            alt="Home Cleaning"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Carpentry"> <a
                                        href="servicesbycategory/7.html"><img src="{{url('frontend/images/sercat/7.png')}}"
                                            alt="Carpentry"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Pest Control"> <a
                                        href="servicesbycategory/8.html"><img src="{{url('frontend/images/sercat/8.png')}}"
                                            alt="Pest Control"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Chimney Hob"> <a
                                        href="servicesbycategory/9.html"><img src="{{url('frontend/images/sercat/9.png')}}"
                                            alt="Chimney Hob"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Water Purifier"> <a
                                        href="servicesbycategory/10.html"><img src="{{url('frontend/images/sercat/17.png')}}"
                                            alt="Water Purifier"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Computer Repair"> <a
                                        href="servicesbycategory/11.html"><img src="{{url('frontend/images/sercat/10.png')}}"
                                            alt="Computer Repair"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="TV"> <a
                                        href="servicesbycategory/12.html"><img src="{{url('frontend/images/sercat/11.png')}}"
                                            alt="TV"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Refrigerator"> <a
                                        href="servicesbycategory/13.html"><img src="{{url('frontend/images/sercat/12.png')}}"
                                            alt="Refrigerator"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Geyser"> <a
                                        href="servicesbycategory/14.html"><img src="{{url('frontend/images/sercat/20.png')}}"
                                            alt="Geyser"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Car"> <a
                                        href="servicesbycategory/15.html"><img src="{{url('frontend/images/sercat/14.png')}}"
                                            alt="Car"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Document"> <a
                                        href="servicesbycategory/16.html"><img src="{{url('frontend/images/sercat/22.png')}}"
                                            alt="Document"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Movers &amp; Packers"> <a
                                        href="servicesbycategory/17.html"><img src="{{url('frontend/images/sercat/15.png')}}"
                                            alt="Movers &amp; Packers"></a></li>
                                <li data-toggle="tooltip" title="" data-original-title="Home Automation"> <a
                                        href="servicesbycategory/18.html"><img src="{{url('frontend/images/sercat/16.png')}}"
                                            alt="Home Automation"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="semiboxshadow text-center">
                <img src="{{url('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
            </div>
            <!-- <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>Angels Arms<span>Choice</span> of Services</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-dry-servicing.html">
                                    <div class="img-hover">
                                        <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="AC Dry Servicing"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3 style="color:#003399;">AC Dry Servicing</h3>
                                        <hr class="separator">
                                        <p>AC Dry Servicing</p>
                                        <div class="content-btn"><a href="service-details/ac-dry-servicing.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>300</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-installation.html">
                                    <div class="img-hover">
                                        <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="AC Installation"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>AC Installation</h3>
                                        <hr class="separator">
                                        <p>AC Installation</p>
                                        <div class="content-btn"><a href="service-details/ac-installation.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>320</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-gas-top-up.html">
                                    <div class="img-hover">
                                        <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="AC Gas Top Up"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>AC Gas Top Up</h3>
                                        <hr class="separator">
                                        <p>AC Gas Top Up</p>
                                        <div class="content-btn"><a href="service-details/ac-gas-top-up.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>320</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-gas-refill.html">
                                    <div class="img-hover">
                                        <img src="{{url('frontend/images/services/thumbnails/thumbnail.jpg')}}" alt="AC Gas Refill"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>AC Gas Refill</h3>
                                        <hr class="separator">
                                        <p>AC Gas Refill</p>
                                        <div class="content-btn"><a href="service-details/ac-gas-refill.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>510</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            @yield('content')
            </div>
        </section>
        <!-- footer start -->

        @include('frontend.partials.footer')
    </div>
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