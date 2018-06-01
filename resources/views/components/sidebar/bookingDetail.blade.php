{{-- paramters: trips, travellers --}}

<div class="sidebar-item">
  <h4>Your Booking</h4>
  <div class="sidebar-body">
    @php $counter = 0; @endphp
    @foreach($trips as $trip)
      <div class="row">
        <div class="col-md-12">
          <label><strong>{{ date_format(date_create($trip->departureDate), "D, d M Y") }}</strong></label>
        </div>
      </div>
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-3">
          <img src="http://via.placeholder.com/100x50"/>
        </div>
        <div class="col-md-9">
          <span>{{ $trip->vessel->name }}</span> <br/>
          <span class="text-muted">{{ $trip->vessel->company->name }}</span>
        </div>
      </div>
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-5">
          <span>{{ date_format(date_create($trip->route->departureTime), "H:i") }}</span> <br/>
          <span class="text-muted">{{ date_format(date_create($trip->departureDate), "d F Y") }}</span>
        </div>
        <div class="col-md-7">
          <span>{{ $trip->route->departurePort->name }}</span>
        </div>
      </div>
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-5">
          <span>{{ date_format(date_create($trip->route->arrivalTime), "H:i") }}</span> <br/>
          <span class="text-muted">{{ date_format(date_create($trip->departureDate), "d F Y") }}</span>
        </div>
        <div class="col-md-7">
          <span>{{ $trip->route->arrivalPort->name }}</span>
        </div>
      </div>
      @if($counter + 1 < count($trips))
        <hr/>
      @endif
      @php $counter++ @endphp
    @endforeach
    @if(count($travellers) > 0)
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-12">
          <label><strong>Traveller Detail</strong></label>
          @foreach($travellers as $traveller)
            @if($traveller->ageLevel == "Adult")
              <p>{{ $traveller->title }} {{ $traveller->fullName }}</p>
            @elseif($traveller->ageLevel == "Child")
              <p>Child {{ $traveller->fullName }}</p>
            @elseif($traveller->ageLevel == "Infant")
              <p>Infant {{ $traveller->fullName }}</p>
            @endif
          @endforeach
        </div>
      </div>
    @endif
  </div>
</div>
