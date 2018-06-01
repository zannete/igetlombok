<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use App\Payment;

class FastBoatBookingPayment extends Controller{
  private function generateTrip($booking){
    $route = $booking->route;
    $route->departurePort = $booking->route->departure;
    $route->arrivalPort = $booking->route->arrival;

    $trip = new \stdClass();
    $trip->route = $route;
    $trip->adultCount = 0;
    $trip->childCount = 0;
    $trip->infantCount = 0;
    $trip->departureDate = gmdate("Y/m/d", $booking->departureDate);
    $trip->vessel = $booking->vessel;
    $trip->travellers = $booking->travellers;

    foreach($booking->travellers as $traveller){
      if($traveller->ageLevel == "Adult"){
        $trip->adultCount += 1;
      }else if($traveller->ageLevel == "Child"){
        $trip->childCount += 1;
      }else if($traveller->ageLevel == "Infant"){
        $trip->infantCount += 1;
      }
    }
    return $trip;
  }

  public function finish(Request $request){
    $orderIDs = $request->input("order_id");
    $orderIDs = explode("q", $orderIDs);

    $trips = [];
    foreach($orderIDs as $orderID){
      $booking = Booking::find($orderID);  
      $payment = Payment::find($booking->payment->id);
      $payment->payment_method_id = $request->input("payment_type");
      $payment->payment_status_id = 3;
      $payment->save();

      $trips[] = $this->generateTrip($booking);
    }

    $data["trip"] = $trips[0];
    $data["trips"] = $trips;
    $data["travellers"] = $trips[0]->travellers;
    $request->session()->flush();
    return view("pages.fastBoatBooking.payment.finish")->with($data);
  }

  public function unfinish(Request $request){

  }

  public function error(Request $request){

  }
}
