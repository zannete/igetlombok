@extends("layouts.app")

@section("content")
  @php $useSolid = true; @endphp
  @include("components.topBar")
  <div class="clearfix"></div>
  @include("components.menuBar")

  <section class="user-profile" style="padding-top: 30px; padding-bottom: 30px; background: #F7F7F7;">
    <div class="container">
      <div class"col-md-12">
        @foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
        @if(session()->has("success"))
          <div class="alert alert-success" role="alert">{{ session()->get("success") }}</div>
        @endif
      </div>
      <div class="col-md-12 user-name">
        <h3>Welcome, {{ $user->fullName }}</h3>
      </div>
      <div class="col-md-2 col-sm-2">
        <div class="user-profile-tabs">
          <ul class="nav nav-tabs">
            <li><a data-toggle="tab" href="#profile-overview" class="text-center"><i class="fa fa-bolt"></i> <span>Overview</span></a></li>
            <li><a data-toggle="tab" href="#booking" class="text-center"><i class="fa fa-history"></i> <span>Bookings</span></a></li>	
            <li><a data-toggle="tab" href="#profile" class="text-center"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li class="active"><a data-toggle="tab" href="#complaint" class="text-center"><i class="fa fa-edit"></i> <span>Complaints</span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-10 col-sm-10 clear-padding">
        <div class="tab-content">
          <div id="profile-overview" class="tab-pane fade in">
            @include("components.tab.dashboard.overview")
          </div>
          <div id="booking" class="tab-pane fade">
            @include("components.tab.dashboard.bookings")
          </div>
          <div id="profile" class="tab-pane fade">
            @include("components.tab.dashboard.profile")
          </div>
          <div id="complaint" class="tab-pane fade active in">
            @include("components.tab.dashboard.newComplaint")
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section("additionalJS")
@endsection