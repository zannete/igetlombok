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
            <i class="fa fa-suitcase"></i> {{ $booking->package->name }} <br/>
            <small style="color: #fff"><i class="fa fa-calendar"></i> {{ date_format(date_create($booking->departureDate), "d F Y") }} &nbsp&nbsp <i class="fa fa-male"></i> {{ count($booking->travellers) }} person(s)</small>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-5 booking-sidebar col-vcenter" style="margin-top: 30px; margin-bottom: 30px;">
        @include("components.sidebar.bookingDetail", ["owner" => "Tour", "booking" => $booking])
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