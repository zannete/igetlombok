@php
  $useSolid = (isset($useSolid))?$useSolid: false;
  $solidClass = ($useSolid)?"solid":"";
@endphp
<div class="row transparent-menu-top {{ $solidClass }}">
  <div class="container clear-padding">
    <div class="navbar-contact">
      <div class="col-md-7 col-sm-6 clear-padding">
        <a href="#" class="transition-effect"><i class="fa fa-phone" style="color: #6CC9F4 !important"></i> (+65) 8577 3051</a>
        <a href="#" class="transition-effect"><i class="fa fa-envelope-o" style="color: #6CC9F4 !important"></i> support@igetlombok.com</a>
      </div>
      <div class="col-md-5 col-sm-6 clear-padding search-box">
        <div class="col-md-6 col-xs-5 clear-padding">
        </div>
        @guest
          <div class="col-md-6 col-xs-7 clear-padding text-right">
            <a href="/login" class="transition-effect">Login / Register</a>
          </div>
        @else
          <div class="col-md-6 col-xs-7 clear-padding user-logged">
            <a href="/dashboard" class="transition-effect">
              <img src="{{ asset("/assets/images/user.jpg") }}" alt="cruise">
              Hi, {{ Auth::user()->fullName }}
            </a>
            <a href="/logout" class="transition-effect">
              <i class="fa fa-sign-out"></i>Sign Out
            </a>
          </div>
        @endguest
      </div>
    </div>
  </div>
</div>