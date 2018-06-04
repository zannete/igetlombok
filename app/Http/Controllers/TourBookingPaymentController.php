<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\TourBooking;
use App\TourPackage;

class TourBookingPaymentController extends Controller{
  public function finish(Request $request){
    Validator::make($request->all(), [
      "order_id" => "required",
      "payment_type" => "required"
    ])->validate();

    $booking = TourBooking::where("bookingNumber", $request->input("order_id"))->first();
    $booking->departureDate = gmdate("Y/m/d", $booking->departureDate);
    $booking->package = TourPackage::find($booking->tour_package_id);
    $booking->payment->payment_status_id = 3;
    $booking->payment->payment_method_id = $request->input("payment_type");
    $booking->payment->save();
    $data["booking"] = $booking;
    return view("pages.tourPayment.finish")->with($data);
  }
}
