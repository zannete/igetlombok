{{-- paramters: tours --}}
<div role="tabpanel" class="tab-pane" id="tours">
  <div class="col-md-8">
    {!! Form::open(["action" => "TourSearchController@index", "method" => "GET"]) !!}
      <div class="col-md-12 product-search-title">Book Tour Packages</div>
      <div class="col-md-6 col-sm-6 search-col-padding">
        {{ Form::label("departureDate", "Prefered Date") }}
        <div class="input-group">
          {{ Form::text("departureDate", "", ["class" => "form-control", "placeholder" => "DD/MM/YYYY", "id" => "check_in"]) }}
          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 search-col-padding">
        <label>Destination</label><br/>
        <select class="selectpicker" name="destination">
          @foreach($tours as $tour)
            <option value={{ $tour->id }}>{{ $tour->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-6 col-sm-6 search-col-padding">
        {{ Form::label("duration", "Duration (Optional)") }}
        <select class="selectpicker" name="duration">
          <option value="all">All</option>
          <option value="1d">1 Day</option>
          <option value="2d1n">2 Days 1 Night</option>
          <option value="3d2n">3 Days 2 Nights</option>
          <option value="4d3n">4 Days 3 Nights</option>
          <option value="5d4n">5 Days 4 Nights</option>
          <option value="6d5n">6 Days 5 Nights</option>
          <option value="7d6n">7 Days 6 Nights</option>
        </select>
      </div>
      <div class="col-md-6 col-sm-6 search-col-padding">
        {{ Form::label("numberOfTraveller", "Number of Traveller") }}
        <select class="selectpicker" name="numberOfTraveller">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>More than 10</option>
        </select>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12 search-col-padding">
        <button type="submit" class="search-button btn transition-effect">Search Packages</button>
      </div>
      <div class="clearfix"></div>
    </form>
  </div>
  <div class="offer-box col-md-4">
    <div class="item">
      <img src="{{ asset("assets/images/tour1.jpg") }}" />
      <h4>Bali to Gili Trawangan</h4>
      <h5>From IDR 1.500.000</h5>
      <a href="#">KNOW MORE</a>
    </div>
  </div>
  <div class="clearfix"></div>
</div>