<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Vessel;
use App\Place;

class FastBoatBookingDetailController extends Controller{
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
    $data["trips"] = $trips;
    return view("pages.fastBoatBooking.detail")->with($data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    return redirect("/fastBoatBooking/inputTravellers");
  }

}
