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
            BOOK YOUR HOLIDAY NOW <br/>
            <small style="color: #fff">Don't waste your time searching, do it</small>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-7">
        @foreach($trips as $trip)
          <div class="flight-list-v2" style="margin-left: 0px; margin-right: 0px">
            <div class="flight-list-main">	
              <div class="col-md-12" style="padding-top: 15px; padding-bottom: 15px; border-bottom: 1px solid #E7E7E7">
                <b><i class="fa fa-ship" style="color: #6CC9F4"></i> {{ $trip->route->departurePort->name }} <i class="fa fa-long-arrow-right"></i> {{ $trip->route->arrivalPort->name }}</i></b>
              </div>
              <div class="col-md-12" style="padding-top: 5px">
                <b>{{ date_format(date_create($trip->departureDate), "D, d M Y") }}</b>
              </div>
              <div class="col-md-2" style="padding-top: 20px">
                <img src="http://via.placeholder.com/100x50"/>
              </div>
              <div class="col-md-8" style="padding-top: 20px">
                <div class="row">
                  <div class="col-md-12">
                    <b>{{ $trip->vessel->name }}</b>
                  </div>
                  <div class="col-md-12">
                    <span style="color: #8F8F8F">{{ $trip->vessel->company->name }}</span>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px">
                <div class="row">
                  <div class="col-md-3 clear-padding">
                    <span>{{ date_format(date_create($trip->route->departureTime), "H:i") }}</span>
                  </div>
                  <div class="col-md-2 clear-padding">
                    <i class="fa fa-long-arrow-right" style="font-size: 24px"></i>
                  </div>
                  <div class="col-md-3 clear-padding">
                    <span>{{ date_format(date_create($trip->route->arrivalTime), "H:i") }}</span> <br/>
                  </div>
                </div>
                <div class="row" style="color: #8F8F8F">
                  <div class="col-md-3 clear-padding">
                    <span>{{ $trip->route->departurePort->name }}</span>
                  </div>
                  <div class="col-md-2 clear-padding">
                    @php
                      $arrivalTime = date_create($trip->route->arrivalTime);
                      $departureTime = date_create($trip->route->departureTime);
                      $dateDiff = $arrivalTime->diff($departureTime)->format('%Hh %im');;
                    @endphp
                    <span>({{ $dateDiff }})</span>
                  </div>
                  <div class="col-md-3 clear-padding">
                    <span>{{ $trip->route->arrivalPort->name }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-md-5 booking-sidebar" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="sidebar-item">
          <h4>Additional Information</h4>
          <div class="sidebar-body">
            <p>Refund</p>
            <span style="color: #8F8F8F">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tincidunt mi enim, at eleifend odio elementum vel. Suspendisse hendrerit et libero at pretium. Morbi auctor magna pretium ullamcorper tempor. </span>
            <p style="padding-top: 10px"><a href="#">Read More</a></p>
            <p>Reschedule</p>
            <span style="color: #8F8F8F">Maecenas vel purus lectus. Etiam vel metus eget ante aliquam auctor. Suspendisse sit amet venenatis dolor. In posuere elit vel massa convallis, vulputate condimentum lacus hendrerit. Maecenas lobortis velit ut nibh mollis congue. </span>
            <p style="padding-top: 10px"><a href="#">Read More</a></p>
          </div>
        </div>
        <div style="margin-top: 25px;"></div>
        @include("components.sidebar.priceDetails")
        {!! Form::open(["action" => "FastBoatBookingDetailController@store", "method" => "POST"]) !!}
          <button type="submit" class="search-button btn-block">Continue Booking</button>
        {!! Form::close() !!}
      </div>
    </div>
  </section>
@endsection

@section("additionalJS")
@endsection