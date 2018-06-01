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
    <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
      <div class="col-md-4 booking-sidebar">
        @include("components.sidebar.bookingDetail", ["trips" => $trips, "travellers" => $bookings[0]->travellers])
      </div>
      <div class="col-md-5 booking-sidebar">
        @include("components.sidebar.priceDetails", ["trips" => $trips, "panelHeader" => "Billing Overdue"])
        {!! Form::open(["action" => "FastBoatBookingReviewController@store", "method" => "POST", "class" => "sidebar-item", "style" => "margin-top: 24px"]) !!}
          <h4>Payment Details</h4>
          <div class="sidebar-body">
            <div class="row">
              <div class="col-md-12">
                {{ Form::label("payeeFullName", "Payee Full Name") }}
                {{ Form::text("payeeFullName", "", ["class" => "form-control"]) }}
                <p class="help-block"></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12 clear-padding">
                      {{ Form::label("promoCode", "Promo Code") }}
                  </div>
                  <div class="col-md-6 clear-padding">
                    {{ Form::text("promoCode", "", ["class" => "form-control"]) }}
                    <p class="help-block"></p>
                  </div>
                  <div class="col-md-6" style="padding-right: 0px;">
                    <button class="search-button btn-block" style="border: 0px; margin-top: 0px;" type="submit" name="usePromo">Use Code</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                {{ Form::label("paymentMethod", "Payment Method") }}
                @foreach($paymentMethods as $paymentMethod)
                  <div class="radio">
                    <label><input type="radio" name="paymentMethod" value="{{ $paymentMethod->id }}"/>{{ $paymentMethod->name }}</label>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button class="search-button btn-block" style="border: 0px; margin-top: 15px; margin-bottom: 40px;" type="submit" name="confirm">Confirm Booking &amp Pay</button>
              </div>
            </div>
          </div>
        </div>
      {!! Form::close() !!}
      <div class="col-md-3 booking-sidebar">
        <div class="sidebar-item">
          <h4><i class="fa fa-phone"></i> Need Help?</h4>
          <div class="sidebar-body text-center">
            <div class="row">
              <div class="col-md-12">
                <p>Need Help? Call us or drop a message. Our agents will be in touch shortly.</p>
                <h3>+65 8577 3051</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section("additionalJS")
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env("MIDTRANS_CLIENT_KEY") }}"></script>
  <script>
    if({{ $openPaymentWindow }}){
      snap.pay("{{ $payToken }}", {
        onSuccess: function(result){
          let redirectURL = result.finish_redirect_url + "&payment_type=" + result.payment_type;
          window.location = redirectURL;
        },
        onPending: function(result){console.log("pending"); console.log(result);},
        onError: function(result){console.log("error"); console.log(result);},
        onClose: function(){console.log('customer closed the popup without finishing the payment');}
      });
    }
  </script>
@endsection