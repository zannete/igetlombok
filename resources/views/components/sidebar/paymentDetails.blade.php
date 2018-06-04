@php if(!isset($controller)) $controller = "FastBoatBookingReviewController@store"; @endphp
@php if(!isset($paymentMethods)) $paymentMethods = []; @endphp

{!! Form::open(["action" => $controller, "method" => "POST", "class" => "sidebar-item", "style" => "margin-top: 24px"]) !!}
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
{!! Form::close() !!}