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
            <i class="fa fa-suitcase"></i> Rinjani Mountain <br/>
            <small style="color: #fff"><i class="fa fa-calendar"></i> {{ date_format(date_create($booking->departureDate), "d F Y") }} &nbsp&nbsp <i class="fa fa-male"></i> {{ $booking->numberOfTraveller }} person(s)</small>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container" style="padding: 20px 0px;">
    <div class="row">
      <div class="col-lg-7 tour-packages">
        <div class="tour card">
          <div class="row header">
            <div class="col-md-12">
              <h4><i class="fa fa-suitcase text-primary"></i> <strong>{{ $booking->package->name }}</strong></h4>
            </div>
          </div>
          <div class="row" style="padding-top: 15px;">
            <div class="col-md-3">
              <img class="img-thumbnail" src="http://via.placeholder.com/800x600"/>
            </div>
            <div class="col-md-9">
              <div class="row" style="display: table;">
                <div class="col-md-4" style="display: table-cell; float: none; vertical-align: top;">
                  <span>Tour Starts</span><br/>
                  <span class="text-muted">{{ date_format(date_create($booking->departureDate), "d F Y (D)") }}</span>
                </div>
                <div class="col-md-4 text-center" style="display: table-cell; float: none; vertical-align: middle;">
                  <i class="fa fa-long-arrow-right" style="font-size: 24px;"></i>
                </div>
                <div class="col-md-4" style="display: table-cell; float: none; vertical-align: top;">
                  <span>Tour Ends</span><br/>
                  <span class="text-muted">{{ date_format(date_create($booking->departureDate)->modify("+".($booking->package->durationDays - 1)." day"), "d F Y (D)") }}</span>
                </div>
              </div>
              <dl class="row" style="padding-top: 10px;">
                <dt class="col-sm-3" style="font-weight: normal">Package</dt> <dd class="col-sm-9 text-muted">{{ $booking->package->type }}</dd>
                <dt class="col-sm-3" style="font-weight: normal">Person(s)</dt> <dd class="col-sm-9 text-muted">{{ $booking->numberOfTraveller }} person(s)</dd>
              </dl>
            </div>
            <div class="col-md-3">
            </div>
          </div>
        </div>
        @php $dayPassed = 0 @endphp
        @foreach($itenaries as $itenary)
          <div class="tour card">
            <div class="row header">
              <div class="col-md-12">
                <h4><i class="fa fa-calendar text-primary"></i> <strong>{{ $itenary->title }}</strong></h4>
              </div>
            </div>
            <div class="row" style="padding-top: 15px;">
              <div class="col-md-12" style="padding: 15px;">
                <strong style="line-height: 30px">{{ date_format(date_create($booking->departureDate)->modify("+" . $dayPassed . " day"), "D, d F Y") }}</strong>
              </div>
              <div class="col-md-12">
                <p>{{ $itenary->description }}</p>
              </div>
            </div>
          </div>
          @php $dayPassed++ @endphp
        @endforeach
        <div class="row" style="margin-top: 20px;">
          <div class="col-md-6" style="padding-left: 0px;">
            <div class="tour card" style="margin-bottom: 0px">
              <div class="row header">
                <div class="col-md-12">
                  <h4><i class="fa fa-check text-primary"></i> Includes</h4>
                </div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <div class="col-md-12">
                  @foreach($booking->package->includes as $include)
                    <p><i class="fa fa-check"></i> {{ $include->name }}</p>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6" style="padding-right: 0px;">
            <div class="tour card" style="margin-bottom: 0px">
              <div class="row header">
                <div class="col-md-12">
                  <h4><i class="fa fa-close text-danger"></i> Excludes</h4>
                </div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <div class="col-md-12">
                  @foreach($booking->package->excludes as $exclude)
                    <p><i class="fa fa-close"></i> {{ $exclude->name }}</p>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tour card">
          <div class="row header">
            <div class="col-md-12">
              <h4>What to Bring</h4>
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-md-12">
              <ul style="padding-left: 20px;">
                @foreach($booking->package->whatToBrings as $whatToBring)
                  <li>{{ $whatToBring->name }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 booking-sidebar">
        <div class="sidebar-item">
          <h4>Additional Information</h4>
          <div class="sidebar-body">
            <p><strong>Refund</strong></p>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non sem odio. Quisque tristique arcu at enim tempus, vel rhoncus metus tempus. Maecenas turpis sem, rhoncus sed rutrum vitae, tempus quis mi. Nulla facilisi. Etiam quis dignissim felis.</p>
            <a href="#">Read More</a>
            <br/><br/>
            <p><strong>Reschedule</strong></p>
            <p class="text-muted">Nunc molestie diam vitae tincidunt tincidunt. Donec sed fringilla arcu. Praesent sed ex erat. Pellentesque iaculis ornare diam, dictum convallis metus semper ac. Morbi pretium, est vitae porta bibendum, massa mi blandit tellus, vitae porttitor neque dolor finibus risus. Pellentesque eget fringilla tellus</p>
            <a href="#">Read More</a>
          </div>
        </div>
        @include("components.sidebar.priceDetails", ["owner" => "Tour", "trips" => $trips])
        {!! Form::open(["action" => "TourDetailController@store", "method" => "POST"]) !!}
          <button type="submit" class="search-button btn-block">Continue Booking</button>
        {!! Form::close() !!}
      </div>
    </div>
  </section>

@endsection

@section("additionalJS")
@endsection