<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Route;
use App\Place;
use App\Payment;
use App\PaymentMethod;
use App\Booking;

class FastBoatBookingReviewController extends Controller{

  private function generateTrip($routeID, $vesselID, $date, $request){
    $route = Route::find($routeID);
    $route->departurePort = $route->departure;
    $route->arrivalPort = $route->arrival;

    $vessels = $route->vessels;
    foreach($vessels as $mVessel){
      if($mVessel->id == $vesselID){
        $vessel = $mVessel;
      }
    }

    $trip = new \stdClass();
    $trip->route = $route;
    $trip->departureDate = $date;
    $trip->vessel = $vessel;
    $trip->adultCount = (int)$request->session()->get("adultCount");
    $trip->childCount = (int)$request->session()->get("childCount");
    $trip->infantCount = (int)$request->session()->get("infantCount");
    $trip->totalPriceAdult = $trip->adultCount * $trip->vessel->pivot->price;
    $trip->totalPriceChild = $trip->childCount * $trip->vessel->pivot->price;
    $trip->totalPriceInfant = $trip->infantCount * $trip->vessel->pivot->price * 0;
    $trip->totalPrice = $trip->totalPriceAdult + $trip->totalPriceChild + $trip->totalPriceInfant;
    return $trip;
  }

  public function index(Request $request){
    $trips = [];
    if($request->session()->get("isRoundTrip")){
      $depart = $request->session()->get("booking.2way.depart");
      $return = $request->session()->get("booking.2way.return");
      $trips[] = $this->generateTrip($depart->route->id, $depart->vessel->id, $request->session()->get("departureDate"), $request);
      $trips[] = $this->generateTrip($return->route->id, $return->vessel->id, $request->session()->get("returnDate"), $request);
    }else{
      $routeID = $request->session()->get("selectedRoute");
      $vesselID = $request->session()->Get("selectedVessel");
      $trips[] = $this->generateTrip($routeID, $vesselID, $request->session()->get("departureDate"), $request);
    }

    $bookings = [];
    foreach($request->session()->get("bookings") as $bookingID){
      $bookings[] = Booking::find($bookingID);
    }

    $data = array();
    $data["trip"] = $trips[0];
    $data["trips"] = $trips;
    $data["bookings"] = $bookings; 
    $data["paymentMethods"] = PaymentMethod::all();
    $data["openPaymentWindow"] = ($request->session()->exists("booking.openPaymentWindow"))? $request->session()->pull("booking.openPaymentWindow", true): false;
    $data["payToken"] = ($request->session()->exists("booking.payToken"))? $request->session()->pull("booking.payToken", null): null;
    // return $data;
    return view("pages.fastBoatBooking.review")->with($data);
  }

  public function store(Request $request){
    try{
      DB::transaction(function() use($request){
        foreach($request->session()->get("bookings") as $bookingID){
          $booking = Booking::find($bookingID);
          $payment = new Payment();
          $payment->payeeFullName = $request->input("payeeFullName");
          $payment->amount = $booking->totalPrice;
          $payment->payment_method_id = $request->input("paymentMethod");
          $payment->booking_id = $booking->id;
          $payment->payment_status_id = 1;
          $payment->currency_id = 1;
          $payment->save();
        }
      }, 10);
    }catch(\Exception $e){
      return redirect()->back();
    }

    $totalPrice = 0;
    $itemDetails = [];
    $bookingIDs = [];
    $cp = null;
    foreach($request->session()->get("bookings") as $bookingID){
      $bookingIDs[] = $bookingID;
      $booking = Booking::find($bookingID);
      $cp = $booking->user;
      $totalPrice = $totalPrice + $booking->totalPrice;
      $adultCount = $childCount = $infantCount = 0;
      $adultPrice = $childPrice = $infantPrice = 0;
      foreach($booking->travellers as $traveller){
        if($traveller->ageLevel == "Adult"){
          $adultCount++;
        }else if($traveller->ageLevel == "Child"){
          $childCount++;
        }else if($traveller->ageLevel == "Infant"){
          $infantCount++;
        }
      }

      $vessel = null;
      foreach($booking->route->vessels as $mVessel){
        if($booking->vessel->id == $mVessel->id){
          $vessel = $mVessel;
        }
      }
      $adultPrice = $childPrice = $vessel->pivot->price;

      if($adultCount > 0){
        $itemDetails[] = ["name" => "Adult Ticket | ". $booking->route->departure->name . " - ". $booking->route->arrival->name, "price" => $adultPrice , "quantity" => $adultCount];
      }
      if($childCount > 0){
        $itemDetails[] = ["name" => "Child Ticket | ". $booking->route->departure->name . " - ". $booking->route->arrival->name, "price" => $childPrice, "quantity" => $childCount ];
      }
      if($infantCount > 0){
        $itemDetails[] = ["name" => "Child Ticket | ". $booking->route->departure->name . " - ". $booking->route->arrival->name, "price" => $infantPrice, "quantity" => $infantCount ];
      }
    }

    /* Konfigurasi Midtrans disini */
    // try{
      $client = new \GuzzleHttp\Client();
      $res = $client->request("POST", env("MIDTRANS_API"), [
        "headers" => [
          "Accept" => "application/json",
          "Content-Type" => "application/json",
          "Authorization" => "Basic ". base64_encode(env("MIDTRANS_SERVER_KEY"). ":")
        ],
        "json" => [
          "transaction_details" => [
            "order_id" => join("q",$bookingIDs),
            "gross_amount" => $totalPrice  
          ],
          "item_details" => $itemDetails,
          "customer_details" => [
            "first_name" => join(" ", array_slice(explode(" ", $cp->fullName), 0, -1)),
            "last_name" => join(" ", array_slice(explode(" ", $cp->fullName), -1)),
            "email" => $cp->email,
            "phone" => $cp->phoneNumber
          ]
        ]
      ]);
    // }catch(\Exception $e){
    //   return redirect("/fastBoatBooking/review");
    // }
    
    // return json_decode($res->getBody())->token;
    $request->session()->put("booking.payToken", json_decode($res->getBody())->token);
    $request->session()->put("booking.openPaymentWindow", true);
    return redirect("/fastBoatBooking/review");
  }
}
