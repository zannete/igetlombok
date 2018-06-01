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

  <section>
    <div class="row">
      <div class="container" style="padding-top: 20px">
        <div class="col-md-3 clear-padding">
          <div class="filter-head text-center">
            <h4>25 Result Found Matching Your Search.</h4>
          </div>
          <div class="filter-area">
            <div class="airline-filter filter">
              <h5><i class="fa fa-ship"></i> Fast Boats</h5>
              <ul>
                @foreach($availableVessels as $vessel)
                  <li><input type="checkbox" value={{$vessel->id}}>{{ $vessel->name }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9 flight-listing">
          @php $counter = 0 @endphp
          @foreach($availableRoutes as $route)
            @foreach($route->vessels as $vessel)
              @if($counter == 0)
                {!! Form::open(["action" => "FastBoatSearchController@store", "method" => "POST", "class" => "flight-list-v2", "style" => "margin-top: 0px"]) !!}
              @else
                {!! Form::open(["action" => "FastBoatSearchController@store", "method" => "POST", "class" => "flight-list-v2"]) !!}
              @endif
              @php $counter++ @endphp
                <input type="hidden" name="route" value="{{ $route->id }}"/>
                <input type="hidden" name="vessel" value="{{ $vessel->id }}"/>

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
                    <h5>{{ date_format(date_create($route->arrivalTime), "H:i") }}</h5>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="flight-list-footer" style="padding-top: 0px; padding-bottom: 0px">
                  <div class="col-md-12 col-sm-12 col-xs-12 clear-padding">
                    <div class="pull-right">
                      <span>IDR {{ number_format( $vessel->pivot->price , 0 , '.' , ',' ) }}/person</span>
                      <button type="submit">BOOK</button>
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
            @endforeach
          @endforeach
          <div class="bottom-pagination" style="margin-right: 15px">
            <nav class="pull-right">
              <ul class="pagination pagination-lg">
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
