<div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+911234567890"><i class="fa fa-phone"></i> +880-1624781461</a></li>
                            <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                    contact@angelarms.in</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                            +880-1624781461</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Dhaka,Bangladesh</a></li>
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
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <!-- <li class="title">
                        <a href="index.php.html"><img src="images/logo.png"></a>
                        <a href="{{route('frontend.home')}}">
                            <img style="width:10px height:50px" src="{{url('frontend/images/logo2.png')}}"></a>
                    </li> -->
                    
                    <li> <a href="{{route('home.allService')}}">All Services</a>
                        <!-- <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/ac-wet-servicing.html">Wet Servicing</a></li>
                            <li><a href="service-details/ac-dry-servicing.html">Dry Servicing</a></li>
                            <li><a href="service-details/ac-installation.html">Installation</a></li>
                            <li><a href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                            <li><a href="service-details/ac-gas-top-up.html">Gas Top Up</a></li>
                            <li><a href="service-details/ac-gas-refill.html">Gas Refill</a></li>
                            <li><a href="service-details/ac-repair.html">Repair</a></li>
                        </ul> -->
                    </li>
                   
                    <li> <a href="javascript:void(0);">All Categories</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/ac-wet-servicing.html">AC Repair</a></li>
                            <li><a href="service-details/ac-dry-servicing.html">Beauty & Salon</a></li>
                            <li><a href="service-details/ac-installation.html">Installation</a></li>
                            <li><a href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                            <li><a href="service-details/ac-gas-top-up.html">Gas Top Up</a></li>
                            <li><a href="service-details/ac-gas-refill.html">Gas Refill</a></li>
                            <li><a href="service-details/ac-repair.html">Repair</a></li>
                        </ul>
                       
                    </li>
                   
                    <li><a href="{{route('cart.get')}}">Cart({{session()->has('cart') ? count(session()->get('cart')):0}})</a>
                       
                    </li>
                    @if(auth()->user())
                            @if(auth()->user()->role =='admin')
                            <li class="login-form"><a href="#" title="Logout">Admin</a>
                                <ul class="drop-down one-column hover-fade">
                                    <li class="login-form"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                    <li class="login-form"><a href="{{route('user.logout')}}" title="Logout">Logout</a></li>    
                                </ul>
                            </li>
                            @elseif(auth()->user()->role =='sprovider')
                            <li class="login-form"><a href="#" title="Logout"> {{auth()->user()->name}}</a>
                                <ul class="drop-down one-column hover-fade">
                                    <li class="login-form"><a href="{{route('home.profile')}}">Profile</a></li>
                                    <li class="login-form"><a href="{{route('user.logout')}}" title="Logout">Logout</a></li>    
                                </ul>
                            </li>
                            @else
                            <li class="login-form"><a href="#" title="Logout"> {{auth()->user()->name}}</a>
                                <ul class="drop-down one-column hover-fade">
                                    <li class="login-form"><a href="{{route('userprofile')}}">Profile</a></li>
                                    <li class="login-form"><a href="{{route('user.logout')}}" title="Logout">Logout</a></li>    
                                </ul>
                            </li> 
                        @endif
                   @else
                    <li class="login-form"> <a href="{{route('customer.reg')}}" title="Register">Register</a></li>
                    <li class="login-form"> <a href="{{route('customer.login')}}" title="Login">Login</a></li>
                    <li class="search-bar"></li>
                  @endif
                  
                </ul>
            </nav>
        </header>