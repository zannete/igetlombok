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
            <small style="color: #fff"><i class="fa fa-calendar"></i> {{ date_format(date_create($booking->departureDate), "d F Y") }} &nbsp&nbsp <i class="fa fa-male"></i> {{ count($booking->travellers) }} person(s)</small>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container" style="padding: 30px 0px;">
    <div class="row">
      <div class="col-md-4 booking-sidebar">
        @include("components.sidebar.bookingDetail", ["owner" => "Tour", "booking" => $booking])
      </div>
      <div class="col-md-5 booking-sidebar">
        <div class="sidebar-item">
          <h4>Billing Overdue</h4>
          <div class="sidebar-body">
            <table class="table">
              <tbody>
                <tr>
                  <td>{{ $booking->package->name }} (Adult) {{ $adultCount }}x</td>
                  <td class="text-right">IDR {{ number_format( $adultPrice , 0 , '.' , ',' ) }}</td>
                </tr>
                <tr>
                  <td>{{ $booking->package->name }} (Child) {{ $childCount }}x</td>
                  <td class="text-right">IDR {{ number_format( $childPrice , 0 , '.' , ',' ) }}</td>
                </tr>
                <tr>
                  <td>{{ $booking->package->name }} (Infant) {{ $infantCount }}x</td>
                  <td class="text-right">IDR {{ number_format( $infantPrice , 0 , '.' , ',' ) }}</td>
                </tr>
                <tr>
                  @php $totalAll = $adultPrice + $childPrice + $infantPrice; @endphp
                  <td>Price You Pay</td>
                  <td style="font-weight: bold" class="text-right"> IDR {{ number_format( $totalAll , 0 , '.' , ',' ) }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="sidebar-item" style="margin-top: 20px;">
          @include("components.sidebar.paymentDetails", ["controller" => "TourBookingReviewController@store", "paymentMethods" => $paymentMethods])
        </div>
      </div>
      <div class="col-md-3 booking-sidebar">
        @include("components.sidebar.contactUs")
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
          let redirectURL = "{{ env('APP_URL') }}/tourBooking/payment/finish?order_id=" + result.order_id + "&status_code=" + result.status_code + "&transaction_status=" + result.transaction_status + "&payment_type=" + result.payment_type;
          window.location = redirectURL;
        },
        onPending: function(result){console.log("pending"); console.log(result);},
        onError: function(result){console.log("error"); console.log(result);},
        onClose: function(){console.log('customer closed the popup without finishing the payment');}
      });
    }
  </script>
@endsection