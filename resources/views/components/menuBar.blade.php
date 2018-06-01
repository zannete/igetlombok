@php
  $useSolid = (isset($useSolid))?$useSolid: false;
  $solidClass = ($useSolid)?"solid":"";
@endphp

<div class="row transparent-menu {{ $solidClass }}">
  <div class="container clear-padding">
    <!-- BEGIN: HEADER -->
    <div class="navbar-wrapper">
      <div class="navbar navbar-default" role="navigation">
        <!-- BEGIN: NAV-CONTAINER -->
        <div class="nav-container">
          <div class="navbar-header">
            <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <!-- BEGIN: LOGO -->
            <a class="navbar-brand logo" href="/" style="padding: 0;"><img src="http://via.placeholder.com/100x50"/></a>
          </div>
          
          <!-- BEGIN: NAVIGATION -->       
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="/"><i class="fa fa-home"></i> HOME </a>
              </li>
              <li>
                <a href="/"><i class="fa fa-ship"></i> FAST BOATS </a>
              </li>
              <li>
                <a href="/"><i class="fa fa-suitcase"></i> TOURS </a>
              </li>
            </ul>
          </div>
          <!-- END: NAVIGATION -->
          
        </div>
        <!--END: NAV-CONTAINER -->
      </div>
    </div>
    <!-- END: HEADER -->
  </div>
</div>