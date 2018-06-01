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
    <div class="row">
      <div class="col-md-5 booking-sidebar col-vcenter" style="margin-top: 30px; margin-bottom: 30px;">
        @include("components.sidebar.bookingDetail", ["trips" => $trips, "travellers" => $travellers])
      </div><!--
      --><div class="col-md-7 booking-sidebar col-vcenter text-center text-success" style="margin-top: 30px; margin-bottom: 30px">
        <i class="fa fa-check-circle" style="font-size: 100px;"></i>
        <h1>Your Booking is Confirmed</h1>
        <p>Pack your bags, prepare the most amazing trip.</p>
        <a href="/dashboard">Go To Dashboard</a>
      </div>
    </div>
  </section>
@endsection

@section("additionalJS")
@endsection