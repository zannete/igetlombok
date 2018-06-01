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
          <div class="sidebar-item">
            <h4>Contact Details</h4>
            <div class="sidebar-body">
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label("fullName", "Full name") }}
                  {{ Form::text("fullName[]", "", ["class" => "form-control"]) }} 
                  <p class="help-block">As on ID Card/passport/driving license (without degree or special characters)</p>
                </div>
                <div class="col-md-6">
                  {{ Form::label("phoneNumber", "Phone Number") }}
                  {{ Form::text("phoneNumber", "", ["class" => "form-control"]) }}
                  <p class="help-block">e.g. +62812345678, for Country Code (+62) and Mobile No. 0812345678</p>
                </div>
                <div class="col-md-6">
                  {{ Form::label("email", "Email") }}
                  {{ Form::text("email", "", ["class" => "form-control"]) }}
                  <p class="help-block">e.g. email@example.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar-item" style="margin-top: 20px">
            <h4>Travellers Detail</h4>
            <div class="sidebar-body">
              @for($a=0; $a<$trip->adultCount; $a++)
                @php $padding = ($a+1 < $trip->adultCount)?"padding-bottom: 30px": ""; @endphp
                <div class="row" style="{{ $padding }}">
                  <div class="col-md-12">
                    <label><strong>Adult {{ $a+1 }}</strong></label>
                    <p class="text-warning">Name as on ID card/passport/driving license</p>
                  </div>
                  <div class="col-md-6">
                    <label>Title</label>
                    <select class="form-control" name="title[]">
                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Ms</option>
                    </select>
                  </div>
                  <div class="clearfix"></div> <p class="help-block"></p>
                  <div class="col-md-6">
                    {{ Form::label("personalID", "ID Card/Passport") }}
                    {{ Form::text("personalID[]", "", ["class" => "form-control"]) }}
                    <p class="help-block"></p>
                  </div>
                  <div class="col-md-6">
                    {{ Form::label("nationality", "Nationality") }}
                    <select class="form-control" name="nationality[]">
                      @foreach($nationalities as $nationality)
                        <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-12">
                    {{ Form::label("fullName", "Full Name") }}
                    {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
                    <p class="help-block"></p>
                  </div>
                </div>
              @endfor
              <hr/>
              @for($a=0; $a<$trip->childCount; $a++)
                @php $padding = ($a+1 < $trip->childCount)?"padding-bottom: 30px": ""; @endphp
                <div class="row" style="{{ $padding }}">
                  <div class="col-md-12">
                    <label><strong>Child {{ $a+1 }}</strong></label>
                  </div>
                  <div class="col-md-6">
                    {{ Form::label("fullName", "Full Name") }}
                    {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
                  </div>
                  <div class="col-md-6">
                    {{ Form::label("nationality", "Nationality") }}
                    <select class="form-control" name="nationality[]">
                      @foreach($nationalities as $nationality)
                        <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              @endfor
              <hr/>
              @for($a=0; $a<$trip->infantCount; $a++)
                @php $padding = ($a+1 < $trip->infantCount)?"padding-bottom: 30px": ""; @endphp
                <div class="row" style="{{ $padding }}">
                  <div class="col-md-12">
                    <label><strong>Infant {{ $a+1 }}</strong></label>
                  </div>
                  <div class="col-md-6">
                    {{ Form::label("fullName", "Full Name") }}
                    {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
                  </div>
                  <div class="col-md-6">
                    {{ Form::label("nationality", "Nationality") }}
                    <select class="form-control" name="nationality[]">
                      @foreach($nationalities as $nationality)
                        <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              @endfor
            </div>
          </div>
          <button class="search-button pull-right" style="border: 0px; margin-top: 15px; margin-bottom: 40px;" type="submit">Continue</button>
        </div>
        <div class="col-md-5 booking-sidebar" style="padding-top: 25px">
          @include("components.sidebar.bookingDetail", ["trips" => $trips, "travellers" => []])
          <div style="margin-top: 20px;"></div>
          @include("components.sidebar.priceDetails", ["trips" => $trips])
          <div class="sidebar-item" style="margin-top: 20px; margin-bottom: 40px;">
            <h4>Terms and Conditions</h4>
            <div class="sidebar-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-muted">Suspendisse potenti. Aliquam quam leo, sodales et urna eget, finibus luctus sem. Phasellus laoreet lacinia felis. Phasellus viverra finibus nibh eget malesuada. Fusce aliquam varius nulla. Etiam tempor, ligula a vulputate dignissim, velit purus imperdiet nibh, ut eleifend sem lacus eget turpis. Aenean ultrices vel risus eget malesuada. Nam vehicula congue enim, at bibendum velit pretium ut. Aliquam bibendum euismod arcu a sollicitudin. Nunc molestie diam eu libero tincidunt lacinia eu quis sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst.</p>
                  <p><a href="#">Read More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    {!! Form::close() !!}
  </section>

@endsection

@section("additionalJS")
@endsection