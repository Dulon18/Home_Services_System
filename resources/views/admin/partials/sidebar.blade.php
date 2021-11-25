<!-- sidebar menu start -->
<div class="sidebar-menu sticky-sidebar-menu">

<!-- logo start -->
<div class="logo">
  <h1><a href="{{route('admin.dashboard')}}">Angels Arms</a></h1>
</div>

<div class="logo-icon text-center">
  <a href="{{route('admin.dashboard')}}" title="logo"><img src="{{url('Backend/assets/images/logo.png')}}" alt="logo-icon"> </a>
</div>
<!-- //logo end -->

<div class="sidebar-menu-inner">

  <!-- sidebar nav start -->
  <ul class="nav nav-pills nav-stacked custom-nav">
    <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
    </li>
    <li class="menu-list">
      <a href="{{route('admin.services')}}"><i class="fa fa-cogs"></i>
        <span>Services<i class="lnr lnr-chevron-right"></i></span> 
      </a>
      <ul class="sub-menu-list">
      <li><a href="{{route('admin.services')}}">Services</a> </li>
        <li><a href="{{route('admin.category')}}">Categories</a> </li>
      </ul>
    </li>
    <li><a href="{{route('admin.customer')}}"><i class="fa fa-users"></i> <span>Customers</span></a></li>
    <li><a href="{{route('admin.serviceProvider.dashboard')}}"><i class="fa fa-user"></i> <span>Service Provider</span></a></li>
    <li><a href="{{route('admin.booking')}}"><i class="fa fa-book"></i> <span>Booking</span></a></li>
    <li><a href="{{route('admin.bill')}}"><i class="fa fa-file-text"></i> <span>Billing</span></a></li>
    <li><a href="{{route('admin.rating')}}"><i class="fa fa-star"></i> <span>Rating</span></a></li>
  </ul>
  <!-- //sidebar nav end -->
  <!-- toggle button start -->
  <a class="toggle-btn">
    <i class="fa fa-angle-double-left menu-collapsed__left"><span>Click For Sidebar</span></i>
    <i class="fa fa-angle-double-right menu-collapsed__right"></i>
  </a>
  <!-- //toggle button end -->
</div>
</div>
<!-- //sidebar menu end -->