{{-- paramters: trips, panelHeader, owner --}}

@php if(!isset($trips)){ $trips = [];} @endphp
@php if(!isset($panelHeader)){ $panelHeader = "Price Details";} @endphp
@php if(!isset($owner)){ $owner = "FastBoat";} @endphp

@if($owner == "FastBoat")
  <div class="sidebar-item">
    <h4>{{ $panelHeader }}</h4>
    <div class="sidebar-body">
      <table class="table">
        <tbody>
          @php $totalAdult = $totalChild = $totalInfant = $totalAll = 0; @endphp
          @foreach($trips as $trip) 
            @if($trip->adultCount > 0)
              @php $totalAdult = $trip->adultCount * $trip->vessel->pivot->price; @endphp
              @php $totalAll = $totalAll + $totalAdult @endphp
              <tr style="border-bottom: 0px">
                <td>{{ $trip->vessel->name }} (Adult {{ $trip->adultCount }}x)</td>
                <td rowspan="2" class="text-right" style="vertical-align: middle !important; border-bottom: 1px solid #e6e6e6">IDR {{ number_format( $totalAdult , 0 , '.' , ',' ) }}</td>
              </tr>
              <tr>
                <td>{{ $trip->route->departurePort->name }} - {{ $trip->route->arrivalPort->name }}</td>
              </tr>
            @endif
            @if($trip->childCount > 0)
              @php $totalChild = $trip->childCount * $trip->vessel->pivot->price; @endphp
              @php $totalAll = $totalAll + $totalChild @endphp
              <tr style="border-bottom: 0px">
                <td>{{ $trip->vessel->name }} (Child {{ $trip->childCount }}x)</td>
                <td rowspan="2" class="text-right" style="vertical-align: middle !important; border-bottom: 1px solid #e6e6e6">IDR {{ number_format( $totalChild , 0 , '.' , ',' ) }}</td>
              </tr>
              <tr>
                <td>{{ $trip->route->departurePort->name }} - {{ $trip->route->arrivalPort->name }}</td>
              </tr>
            @endif
            @if($trip->infantCount > 0)
              @php $totalInfant = $trip->infantCount * 0; @endphp
              @php $totalAll = $totalAll + $totalInfant @endphp
              <tr style="border-bottom: 0px">
                <td>{{ $trip->vessel->name }} (Infant {{ $trip->infantCount }}x)</td>
                <td rowspan="2" class="text-right" style="vertical-align: middle !important; border-bottom: 1px solid #e6e6e6">IDR {{ number_format( $totalInfant , 0 , '.' , ',' ) }}</td>
              </tr>
              <tr>
                <td>{{ $trip->route->departurePort->name }} - {{ $trip->route->arrivalPort->name }}</td>
              </tr>
            @endif
          @endforeach
          <tr>
            <td>Price You Pay</td>
            <td style="font-weight: bold" class="text-right"> IDR {{ number_format( $totalAll , 0 , '.' , ',' ) }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@else
  <div class="sidebar-item">
    <h4>{{ $panelHeader }}</h4>
    <div class="sidebar-body">
      <table class="table">
        <tbody>
          @php $totalAll = 0; @endphp
          @foreach($trips as $trip)
            <tr>
              <td>{{ $trip->package->name }} {{ $trip->numberOfTraveller }}x</td>
              <td class="text-right">IDR {{ number_format( $trip->numberOfTraveller * $trip->package->price , 0 , '.' , ',' ) }}</td>
            </tr>
            @php $totalAll = $totalAll + ($trip->package->price * $trip->numberOfTraveller); @endphp
          @endforeach
          <tr>
            <td>Price You Pay</td>
            <td style="font-weight: bold" class="text-right"> IDR {{ number_format( $totalAll , 0 , '.' , ',' ) }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endif