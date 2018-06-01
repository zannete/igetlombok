{{-- parameters: vessel, rouote, clearMargin, overrideMargin --}}
@php $clearMargin = (isset($clearMargin))?"margin-top: 0px;": "" @endphp
<div class="flight-list-v2" style="{{ $clearMargin }}">
  <div class="flight-list-main">
    <div class="col-md-2 col-sm-2 text-center airline">
      <img src="{{ asset("assets/images/airline/airline.jpg") }}" alt="cruise">
      <h6>{{ $vessel->name }}</h6>
    </div>
    <div class="col-md-4 col-sm-4 departure">
      <h3><i class="fa fa-plane"></i> {{ $route->departurePort->name }}</h3>
      <h5 class="bold">{{ date_format(date_create($requestedData->departureDate), "D, d M Y") }}</h5>
      <h5>{{ date_format(date_create($route->departureTime), "H:i") }}</h5>
    </div>
    <div class="col-md-2 col-sm-2 stop-duration">
      <div class="flight-direction">
      </div>
      <div class="stop"></div>
      <div class="duration text-center">
        @php
          $arrivalTime = date_create($route->arrivalTime);
          $departureTime = date_create($route->departureTime);
          $dateDiff = $arrivalTime->diff($departureTime)->format('%Hh %im');;
        @endphp
        <span><i class="fa fa-clock-o"></i> {{ $dateDiff }}</span>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 destination">
      <h3><i class="fa fa-plane fa-rotate-90"></i> {{ $route->arrivalPort->name }}</h3>
      <h5 class="bold">{{ date_format(date_create($requestedData->departureDate), "D, d M Y") }}</h5>
      <h5>{{ date_format(date_create($route->departureTime), "H:i") }}</h5>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="flight-list-footer" style="padding: 0px;">
    <div class="col-md-12 col-sm-12 col-xs-12 clear-padding">
      <div class="pull-right">
        <span>IDR {{ number_format( $vessel->pivot->price , 0 , '.' , ',' ) }}/person</span>
        @if(isset($overrideButton))
          {!! $overrideButton !!}
        @else
          <button>Select</select>
        @endif
      </div>
    </div>
  </div>
</div>