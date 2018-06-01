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

  <section class="container" style="padding-top: 20px">
    @if(isset($selected))
      {!! Form::open(["action" => "FastBoatSearchController@store", "method" => "POST", "class" => "row"]) !!}
        <div class="col-md-12 text-center">
          <span>Your Selection</span>
        </div>
        <div class="col-md-6 clear-padding">
          @if(isset($selected->depart))
            @include("components.fastBoatSearchItem", ["vessel" => $selected->depart->vessel, "route" => $selected->depart->route])
          @endif
        </div>
        <div class="col-md-6 clear-padding">
          @if(isset($selected->return))
            @include("components.fastBoatSearchItem", ["vessel" => $selected->return->vessel, "route" => $selected->return->route])
          @endif
        </div>
        <div class="col-md-12 text-center">
          @if(isset($selected->depart) && isset($selected->return))
            <button class="btn btn-primary" type="submit">Continue Booking</button>
          @else
            <button class="btn btn-primary" disabled>Continue Booking</button>
          @endif
        </div>
      {!! Form::close() !!}
      <hr/>
    @endif
    <div class="row">
      <div class="col-md-6 flight-listing clear-padding">
        @php $counter = 0; @endphp
        @foreach($availableRoutes as $route)
          @foreach($route->vessels as $vessel)
            {!! Form::open(["action" => "FastBoatSearchController@selectDepart", "method" => "POST"]) !!}
              <input type="hidden" name="vesselID" value="{{ $vessel->id }}"/>
              <input type="hidden" name="routeID" value="{{ $route->id }}"/>
              @if($counter == 0)
                @include("components.fastBoatSearchItem", ["vessel" => $vessel, "route" => $route, "overrideButton" => '<button type="submit">Select</button>', "clearMargin" => true])
              @else
                @include("components.fastBoatSearchItem", ["vessel" => $vessel, "route" => $route, "overrideButton" => '<button type="submit">Select</button>'])
              @endif
              @php $counter++; @endphp
            {!! Form::close() !!}
          @endforeach
        @endforeach
        <div class="bottom-pagination" style="margin-right: 15px">
          <nav class="pull-right">
            <ul class="pagination pagination-lg">
              {{-- <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">6 <span class="sr-only">(current)</span></a></li>
              <li><a href="#" aria-label="Previous"><span aria-hidden="true">»</span></a></li> --}}
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-md-6 flight-listing clear-padding">
        @php $counter = 0; @endphp
        @foreach($availableReturnRoutes as $route)
          @foreach($route->vessels as $vessel)
            {!! Form::open(["action" => "FastBoatSearchController@selectReturn", "method" => "POST"]) !!}
              <input type="hidden" name="vesselID" value="{{ $vessel->id }}"/>
              <input type="hidden" name="routeID" value="{{ $route->id }}"/>
              @if($counter == 0)
                @include("components.fastBoatSearchItem", ["vessel" => $vessel, "route" => $route, "overrideButton" => '<button type="submit">Select</button>', "clearMargin" => true])
              @else
                @include("components.fastBoatSearchItem", ["vessel" => $vessel, "route" => $route, "overrideButton" => '<button type="submit">Select</button>'])
              @endif
              @php $counter++; @endphp
            {!! Form::close() !!}
          @endforeach
        @endforeach
        <div class="bottom-pagination" style="margin-right: 15px">
          <nav class="pull-right">
            <ul class="pagination pagination-lg">
              {{-- <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">6 <span class="sr-only">(current)</span></a></li>
              <li><a href="#" aria-label="Previous"><span aria-hidden="true">»</span></a></li> --}}
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
@endsection

@section("additionalJS")

@endsection