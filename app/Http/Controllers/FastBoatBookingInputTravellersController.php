<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Route;
use App\Place;
use App\Nationality;
use App\Booking;
use App\User;
use App\Traveller;

class FastBoatBookingInputTravellersController extends Controller{
  private function generateTrip($routeID, $vesselID, $date, $request){
    $route = Route::find($routeID);
    $route->departurePort = $route->departure;
    $route->arrivalPort = $route->arrival;

    $vessel = null;
    foreach($route->vessels as $mVessel){
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
    return $trip;
  }

  private function generateMBooking($routeID, $vesselID, $date, $request){
    $route = Route::find($routeID);
    
    $vessel = null;
    foreach($route->vessels as $mVessel){
      if($mVessel->id == $vesselID){
        $vessel = $mVessel;
      }
    }
    
    $totalTraveller = $request->session()->get("adultCount") + $request->session()->get("childCount") + $request->session()->get("infantCount");
    $totalTravellerWithoutInfant = $totalTraveller - $request->session()->get("infantCount");

    $booking = new Booking();
    $booking->totalPrice = $totalTravellerWithoutInfant * $vessel->pivot->price;
    $booking->departureDate = date_format(date_create($date), "U");
    $booking->vessel_id = $vesselID;
    $booking->route_id = $routeID;
    $booking->complaint_id = null;

    // $request->session()->put("booking.cp.fullName", $contactPerson->fullName);
    // $request->session()->put("booking.cp.phoneNumber", $contactPerson->phoneNumber);
    // $request->session()->put("booking.cp.email", $contactPerson->email);

    $counter = 1;
    $travellers = array();
    for($a=0; $a < $request->session()->get("adultCount"); $a++){
      $traveller = new Traveller();
      $traveller->title = $request->input("title")[$counter-1];
      $traveller->fullName = $request->input("fullName")[$counter];
      $traveller->personalID = $request->input("personalID")[$counter-1];
      $traveller->ageLevel = "Adult";
      $traveller->nationality_id = $request->input("nationality")[$counter - 1];
      $counter++;
      $travellers[] = $traveller;
    }

    for($a=0; $a < $request->session()->get("childCount"); $a++){
      $traveller = new Traveller();
      $traveller->fullName = $request->input("fullName")[$counter];
      $traveller->ageLevel = "Child";
      $traveller->nationality_id = $request->input("nationality")[$counter - 1];
      $counter++;
      $travellers[] = $traveller;
    }

    for($a=0; $a < $request->session()->get("infantCount"); $a++){
      $traveller = new Traveller();
      $traveller->fullName = $request->input("fullName")[$counter];
      $traveller->ageLevel = "Infant";
      $traveller->nationality_id = $request->input("nationality")[$counter - 1];
      $counter++;
      $travellers[] = $traveller;
    }

    $mBooking = new \stdClass();
    $mBooking->booking = $booking;
    $mBooking->travellers = $travellers;
    return $mBooking;
  }

  public function index(Request $request){
    $trips = array();
    if($request->session()->get("isRoundTrip")){
      $depart = $request->session()->get("booking.2way.depart");
      $return = $request->session()->get("booking.2way.return");
      $trips[] = $this->generateTrip($depart->route->id, $depart->vessel->id, $request->session()->get("departureDate"), $request);
      $trips[] = $this->generateTrip($return->route->id, $return->vessel->id, $request->session()->get("returnDate"), $request);
    }else{
      $routeID = $request->session()->get("selectedRoute");
      $vesselID = $request->session()->get("selectedVessel");
      $trips[] = $this->generateTrip($routeID, $vesselID, $request->session()->get("departureDate"), $request);
    }

    $data = array();
    $data["trips"] = $trips;
    $data["trip"] = $trips[0];
    $data["nationalities"] = Nationality::all();
    return view("pages.fastBoatBooking.inputTravellers")->with($data);
  }

  public function store(Request $request){
    $mBookings = array();
    if($request->session()->get("isRoundTrip")){
      $depart = $request->session()->get("booking.2way.depart");
      $return = $request->session()->get("booking.2way.return");
      $mBookings[] = $this->generateMBooking($depart->route->id, $depart->vessel->id, $request->session()->get("departureDate"), $request);
      $mBookings[] = $this->generateMBooking($return->route->id, $return->vessel->id, $request->session()->get("returnDate"), $request);
    }else{
      $routeID = $request->session()->get("selectedRoute");
      $vesselID = $request->session()->get("selectedVessel");
      $mBookings[] = $this->generateMBooking($routeID, $vesselID, $request->session()->get("departureDate"), $request);
    }

    try{
      $request->session()->forget("bookings");
      DB::transaction(function() use($mBookings, $request){
        foreach($mBookings as $mBooking){
          $contactPerson = User::firstOrNew(["email" => $request->input("email")]);
          $contactPerson->fullName = $request->input("fullName")[0];
          $contactPerson->phoneNumber = $request->input("phoneNumber");
          $contactPerson->email = $request->input("email");
          $contactPerson->save();

          $mBooking->booking->id = date("YmdHisu")."".(count(Booking::all()) + 1);
          $mBooking->booking->user_id = $contactPerson->id;
          $mBooking->booking->save();
          $request->session()->push("bookings", $mBooking->booking->id);
          foreach($mBooking->travellers as $traveller){
            $traveller->user_id = $contactPerson->id;
            $traveller->save();
            $mBooking->booking->travellers()->attach($traveller->id);
          }
        }
      }, 10);
    }catch(\Exception $e){
      return redirect()->intended("/");
    }

    return redirect("/fastBoatBooking/review");
  }

}
