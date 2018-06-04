<div class="col-md-6 clear-padding">
  <div class="brief-info">
    <div class="col-md-2 col-sm-2 clear-padding">
      <img src="{{ asset("assets/images/user.jpg") }}" alt="cruise">
    </div>
    <div class="col-md-10 col-sm-10">
      <h3>{{ $user->fullName }}</h3>
      <h5><i class="fa fa-envelope-o"></i>{{ $user->email }}</h5>
      <h5><i class="fa fa-phone"></i>{{ $user->phoneNumber }}</h5>
    </div>
    <div class="clearfix"></div>
    <div class="brief-info-footer">
      <a href="#"><i class="fa fa-edit"></i>Edit Profile</a>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="most-recent-booking">
    <h4>Recent Booking</h4>
    @foreach($bookings as $booking)
      @if($booking->type == "FastBoat")
        <div class="field-entry">
          <div class="col-md-6 col-sm-4 col-xs-4 clear-padding">
            <p><i class="fa fa-plane"></i>{{ $booking->route->departure->name }}<i class="fa fa-long-arrow-right"></i>{{ $booking->route->arrival->name }}</p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6">
            @php $status = join("", array_slice(explode(" ", $booking->payment->paymentStatus->name), 0, 1)); @endphp
            <p class="{{ strtolower($status) }}"><i class="fa fa-check"></i>{{ $status }}</p>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 text-center clear-padding">
            <a href="#">Detail</a>
          </div>
        </div>
      @elseif($booking->type == "Tour")
        <div class="field-entry">
          <div class="col-md-6 col-sm-4 col-xs-4 clear-padding">
            <p><i class="fa fa-suitcase"></i>{{ $booking->package->name }}</p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6">
            @php $status = join("", array_slice(explode(" ", $booking->payment->paymentStatus->name), 0, 1)); @endphp
            <p class="{{ strtolower($status) }}"><i class="fa fa-check"></i>{{ $status }}</p>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 text-center clear-padding">
            <a href="#">Detail</a>
          </div>
        </div>
      @endif
      <div class="clearfix"></div>
    @endforeach
  </div>
</div>
<div class="col-md-6">
  <div class="user-notification" style="margin-top: 0px;">
    <h4>Notification</h4>
    <div class="notification-body">
      @foreach($bookings as $booking)
        @php 
          $diffString = $booking->updated_at->diffForHumans(); 
          $diffString = str_replace(" seconds", "s", $diffString);
          $diffString = str_replace(" minutes", "m", $diffString);
          $diffString = str_replace(" hours", "h", $diffString);
          $diffString = str_replace(" weeks", "w", $diffString);
          $diffString = str_replace(" days", "d", $diffString);
        @endphp
        @if($booking->type == "FastBoat")
          <div class="notification-entry">
            <p><i class="fa fa-ship"></i> {{ $booking->route->departure->name }} to {{ $booking->route->arrival->name }} Booked <span class="pull-right">{{ $diffString }}</span></p>
          </div>
        @elseif($booking->type == "Tour")
        @endif
      @endforeach
    </div>
  </div>
</div>