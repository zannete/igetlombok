<div class="col-md-8 col-md-offset-2 dashboard-booking">
  @php $counter = 0; @endphp
  @foreach($bookings as $booking)
    @if($counter == 0)
      <div class="row booking-item">
    @else
      <div class="row booking-item" style="margin-top: 20px;">
    @endif
    @php $counter++; @endphp
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
        <span class="label label-success text-uppercase status-label">{{ $booking->payment->paymentStatus->name }}</span>
      </div>
      <div class="col-md-6 clear-padding text-right" style="padding-top: 15px;">
        <a href="/complaint/new?booking_id={{ $booking->id }}">Complaint</a>
      </div>
    </div>
  @endforeach
</div>