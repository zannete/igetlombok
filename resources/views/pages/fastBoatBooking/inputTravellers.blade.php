@extends("layouts.app")

@section("content")
  <section style="background: url('{{ asset("/assets/images/bg-1.jpg") }}'); background-attachment: fixed">
    @include("components.topBar")
    <div class="clearfix"></div>
    @include("components.menuBar")
    
    <div class="row">
      <div class="container clear-padding">
        <div class="col-md-12 single-search">
          <h2 class="text-center">
            @php $arrow = (count($trips) == 1)? "fa fa-long-arrow-right": "fa fa-arrows-h" @endphp
            <i class="fa fa-ship"></i>{{ $trip->route->departurePort->name }} <i class="{{ $arrow }}"></i> {{ $trip->route->arrivalPort->name }} <br/>
            @php
              $fullText = "";
              if($trip->adultCount > 0) $fullText = $fullText ." ". $trip->adultCount ." Adult(s)";
              if($trip->childCount > 0) $fullText = $fullText ." ". $trip->childCount . " Child(s)";
              if($trip->infantCount > 0) $fullText = $fullText ." ". $trip->infantCount . " Infant(s)";
            @endphp
            <small style="color: #fff"><i class="fa fa-calendar"></i> {{ date_format(date_create($trip->departureDate), "d F Y") }} <i class="fa fa-male" style="margin-left: 15px"></i> Traveller(s) - {{ $fullText }}</small>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    {!! Form::open(["action" => "FastBoatBookingInputTravellersController@store", "method" => "POST"]) !!}
      <div class="row">
        <div class="col-md-7 booking-sidebar" style="padding-top: 25px">
          @include("components.sidebar.contactDetails")
          @include("components.sidebar.travellerDetails")
          <button class="search-button pull-right" style="border: 0px; margin-top: 15px; margin-bottom: 40px;" type="submit">Continue</button>
        </div>
        <div class="col-md-5 booking-sidebar" style="padding-top: 25px">
          @include("components.sidebar.bookingDetail", ["trips" => $trips, "travellers" => []])
          <div style="margin-top: 20px;"></div>
          @include("components.sidebar.priceDetails", ["trips" => $trips])
          @include("components.sidebar.termsConditions")
        </div>
      </div>
    {!! Form::close() !!}
  </section>

@endsection

@section("additionalJS")
@endsection