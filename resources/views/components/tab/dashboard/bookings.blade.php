<div class="col-md-8 col-md-offset-2 dashboard-booking">
  @foreach($bookings as $booking)
    @if($booking->type == "FastBoat")
      <div class="row booking-item">
        <div class="col-md-12 clear-padding">
          <h4>{{ $booking->route->departure->name }} <i class="fa fa-long-arrow-right"></i> {{ $booking->route->arrival->name }} </h4>
        </div>
        <div class="col-md-6 clear-padding">
          <p>{{ $booking->vessel->company->name }} | {{ $booking->vessel->name }} <img src="http://via.placeholder.com/100x50"/></p>
        </div>
        <div class="col-md-6 clear-padding text-right">
          <p class="text-uppercase">Booking ID <strong>{{ $booking->id }}</strong></p>
        </div>
        <div class="col-md-12 clear-padding">
          <div class="schedule-container">
            <span class="text-uppercase" style="color: #687176;"><small><strong>Fast Boat Schedule</strong></small></span>
            <div class="clearfix"></div>
            <span style="color: #434343;"><small>{{ gmdate("d F Y", $booking->departureDate) }}</small></span>
          </div>
        </div>
        <div class="col-md-6 clear-padding" style="padding-top: 15px;">
          @php $status = join("", array_slice(explode(" ", $booking->payment->paymentStatus->name), 0, 1)); @endphp
          <span class="label label-success label-{{ strtolower($status) }} text-uppercase status-label">{{ $booking->payment->paymentStatus->name }}</span>
        </div>
        <div class="col-md-6 clear-padding text-right" style="padding-top: 15px;">
          <a href="/complaint/new?booking_id={{ $booking->id }}">Complaint</a>
        </div>
      </div>
    @elseif($booking->type == "Tour")
      <div class="row booking-item">
        <div class="col-md-12 clear-padding">
          <h4>{{ $booking->package->name }}</h4>
        </div>
        <div class="col-md-6 clear-padding">
          <p>{{ $booking->package->tour->name }}</p>
        </div>
        <div class="col-md-6 clear-padding text-right">
          <p class="text-uppercase">Booking ID <strong>{{ $booking->bookingNumber }}</strong></p>
        </div>
        <div class="col-md-12 clear-padding">
          <div class="schedule-container">
            <span class="text-uppercase" style="color: #687176;"><small><strong>Tour Schedule</strong></small></span>
            <div class="clearfix"></div>
            <span style="color: #434343;"><small>{{ gmdate("d F Y", $booking->departureDate) }}</small></span>
          </div>
        </div>
        <div class="col-md-6 clear-padding" style="padding-top: 15px;">
          @php $status = join("", array_slice(explode(" ", $booking->payment->paymentStatus->name), 0, 1)); @endphp
          <span class="label label-success label-{{ strtolower($status) }} text-uppercase status-label">{{ $booking->payment->paymentStatus->name }}</span>
        </div>
        <div class="col-md-6 clear-padding text-right" style="padding-top: 15px;">
          <a href="/complaint/new?booking_id={{ $booking->id }}">Complaint</a>
        </div>
      </div>
    @endif
  @endforeach
</div>