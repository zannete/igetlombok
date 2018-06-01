<div role="tabpanel" class="tab-pane active" id="fastboats">
  <div class="col-md-8 clear-padding">
    {!! Form::open(["action" => "FastBoatSearchController@index", "method" => "GET"]) !!}
      <div class="col-md-12 product-search-title">Book Fast Boats Tickets</div>
      <div class="col-md-12 search-col-padding">
        <label class="radio-inline">
          <input type="radio" name="isRoundTrip" id="rbOneWay" value="false"> One Way
        </label>
        <label class="radio-inline">
          <input type="radio" name="isRoundTrip" id="rbReturn" value="true" checked> Round Trip
        </label>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-6 col-sm-6 search-col-padding">
        {{ Form::label("departure", "Leaving From") }}
        <select class="js-example-basic-single form-control" name="departurePort">
          @foreach($places as $place)
            <option value="{{$place->id}}">{{$place->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-6 col-sm-6 search-col-padding">
        {{ Form::label("arrival", "Leaving To") }}
        <select class="js-example-basic-single form-control" name="arrivalPort">
          @foreach($places as $place)
            <option value="{{$place->id}}">{{$place->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-6 col-sm-6 search-col-padding">
        {{ Form::label("departure", "Deaprture") }}
        <div class="input-group">
          <input type="text" id="departure_date" name="departureDate" class="form-control" placeholder="DD/MM/YYYY">
          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 search-col-padding" id="returnForm">
        {{ Form::label("return", "Return") }}
        <div class="input-group">
          <input type="text" id="return_date" class="form-control" name="returnDate" placeholder="DD/MM/YYYY">
          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-4 col-sm-4 search-col-padding">
        {{ Form::label("fastBoatAdultCount", "Adult") }}
        <input type="text" id="fastboats_adult_count" name="fastBoatAdultCount" value="0" class="form-control quantity-padding">
      </div>
      <div class="col-md-4 col-sm-4 search-col-padding">
        {{ Form::label("fastBoatChildCount", "Child") }}
        <input type="text" id="fastboats_child_count" name="fastBoatChildCount" value="0" class="form-control quantity-padding">
      </div>
      <div class="col-md-4 col-sm-4 search-col-padding">
        {{ Form::label("fastBoatInfantCount", "Infant") }}
        <input type="text" id="fastboats_infant_count" name="fastBoatInfantCount" value="0" class="form-control quantity-padding">
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12 search-col-padding">
        <button type="submit" class="search-button btn transition-effect">Search Boats</button>
      </div>
      <div class="clearfix"></div>
    {!! Form::close() !!}
  </div>
  <div class="offer-box col-md-4">
    <div class="owl-carousel" id="flightoffer">
      <div class="item">
        <img src="{{ asset("assets/images/tour1.jpg") }}" />
        <h4>Bali to Gili Trawangan</h4>
        <h5>From IDR 1.500.000</h5>
        <a href="#">KNOW MORE</a>
      </div>
      <div class="item">
        <img src="{{ asset("assets/images/tour1.jpg") }}" />
        <h4>Bali to Gili Trawangan</h4>
        <h5>From IDR 1.500.000</h5>
        <a href="#">KNOW MORE</a>
      </div>
      <div class="item">
        <img src="{{ asset("assets/images/tour1.jpg") }}" />
        <h4>Bali to Gili Trawangan</h4>
        <h5>From IDR 1.500.000</h5>
        <a href="#">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>