@if(auth()->user()->role == 'admin')
<div class="header sticky-header">
  <!-- notification menu start -->
  <div class="menu-right">
    <div class="navbar user-panel-top">
      <div class="search-box">
        <form action="{{route('admin.services')}}" method="get">
          <input name="search" class="search-input" placeholder="Search Here..." type="search" id="search">
          <button type="submit" class="search-submit" value=""><span class="fa fa-search"></span></button>
        </form>
      </div>
      <div class="user-dropdown-details d-flex">
        <div class="profile_details_left">
          
        </div>
        <div class="profile_details">
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                aria-expanded="false">
                <div class="profile_img">
                  <img src="{{url('Backend/assets/images/b2.jpg')}}" class="rounded-circle" alt="" />
                  <div class="user-active">
                    <span></span>
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                <li class="user-info">
                  <h5 class="user-name">Momotajur Rahman Dulan</h5>
                  <span class="status ml-2">Available</span>
                </li>
                <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>
                <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                <li class="logout"> <a href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i>Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endif
<!--notification menu end --></div>