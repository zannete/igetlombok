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
            <small style="color: #fff"><i class="fa fa-calendar"></i> {{ date_format(date_create($booking->departureDate), "d F Y") }} &nbsp&nbsp <i class="fa fa-male"></i> {{ $booking->numberOfTraveller }} person(s)</small>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container" style="padding: 20px 0px;">
    <div class="row">
      {!! Form::open(["action" => "TourInputTravellersController@store", "method" => "POST", "class" => "col-md-7 booking-sidebar"]) !!}      
        @include("components.sidebar.contactDetails")
        @include("components.sidebar.travellerDetails", ["owner" => "Tour", "trip" => $trip, "titles" => ["Mr", "Mrs", "Ms", "Child", "Infant"], "nationalities" => $nationalites])
        <div class="col-md-12 text-right clear-padding">
          <button class="btn btn-primary" type="submit">Continue</button>
        </div>
      {!! Form::close() !!}
      <div class="col-md-5 booking-sidebar">
        @include("components.sidebar.bookingDetail", ["owner" => "Tour"])
        @include("components.sidebar.priceDetails", ["owner" => "tour", "trips" => $trips])
        @include("components.sidebar.termsConditions")
      </div>
    </div>
  </section>

  @endsection

  @section("additionalJS")
    <script>
      $(document).ready(function(){
        $("select[name='title[]'").on('change', function(e){
          if(e.target.value === "Child" || e.target.value === "Infant"){
            $(this).closest(".traveller-container").find(".adultContainer").hide();
            $(this).closest(".traveller-container").find(".nonAdultContainer").show();
          }else{
            $(this).closest(".traveller-container").find(".adultContainer").show();
            $(this).closest(".traveller-container").find(".nonAdultContainer").hide();
          }
        })
        $("select[name='title[]'").trigger("change");
      })
    </script>
  @endsection