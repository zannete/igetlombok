<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\GroupOfPlace;
use App\Place;
use App\Route;
use App\Vessel;

class FastBoatSearchController extends Controller{
  private function searchRoute($resultArray, $departurePort, $arrivalPort){
    $resRoutes = Route::where("departurePort", $departurePort)
                      ->where("arrivalPort", $arrivalPort)
                      ->get();
    if(count($resRoutes) > 0){
      foreach($resRoutes as $resRoute){
        $resRoute->departurePort = Place::find($resRoute->departurePort);
        $resRoute->arrivalPort = Place::find($resRoute->arrivalPort);
        $resultArray[] = $resRoute;
      }
    }
    return $resultArray;
  }

  private function selectRoute($routeID, $vesselID){
    $route = Route::find($routeID);
    $route->departurePort = $route->departure;
    $route->arrivalPort = $route->arrival;

    $vessel = null;
    foreach($route->vessels as $mVessel){
      if($mVessel->id == $vesselID){
        $vessel = $mVessel;
      }
    }

    $mRoute = new \stdClass();
    $mRoute->vessel = $vessel;
    $mRoute->route = $route;
    return $mRoute;
  }

  public function index(Request $request){
    $this->validate($request, [
      "isRoundTrip" => "required",
      "departurePort" => "required",
      "arrivalPort" => "required", 
      "departureDate" => "required", 
      "fastBoatAdultCount" => "required", 
      "fastBoatChildCount" => "required", 
      "fastBoatInfantCount" => "required"
    ]);

    // $request->session()->flush();

    $data = array();
    $requestedData = new \stdClass();
    $requestedData->isRoundTrip = filter_var($request->input("isRoundTrip"), FILTER_VALIDATE_BOOLEAN);
    $requestedData->departurePort = $request->input("departurePort");
    $requestedData->arrivalPort = $request->input("arrivalPort");
    $requestedData->departureDate = $request->input("departureDate");
    $requestedData->returnDate = $request->input("returnDate");
    $requestedData->fastBoatAdultCount = $request->input("fastBoatAdultCount");
    $requestedData->fastBoatChildCount = $request->input("fastBoatChildCount");
    $requestedData->fastBoatInfantCount = $request->input("fastBoatInfantCount");
    $data["requestedData"] = $requestedData;

    $request->session()->put("isRoundTrip", $requestedData->isRoundTrip);
    $request->session()->put("departurePort", $requestedData->departurePort);
    $request->session()->put("arrivalPort", $requestedData->arrivalPort);
    $request->session()->put("departureDate", $requestedData->departureDate);
    $request->session()->put("returnDate", $requestedData->returnDate);
    $request->session()->put("adultCount", $requestedData->fastBoatAdultCount);
    $request->session()->put("childCount", $requestedData->fastBoatChildCount);
    $request->session()->put("infantCount", $requestedData->fastBoatInfantCount);

    /*
      Mengambil semua data rute yang tersedia didatabase,
      Jika group yang dipilih merupakan rute group, makan ambil semua place yang terdapat pada group
      Cocokan place yang ada didalam group ke databse.
    */
    $departureGroupPlace = GroupOfPlace::find($request->input("departurePort"));
    $arrivalGroupPlace = GroupOfPlace::find($request->input("arrivalPort"));

    $routes = array();
    if(isset($departureGroupPlace) && !isset($arrivalGroupPlace)){
      foreach($departureGroupPlace->places as $departurePort){
        $routes = $this->searchRoute($routes, $departurePort->id, $request->input("arrivalPort"));
      }
    }else if(!isset($departureGroupPlace) && !isset($arrivalGroupPlace)){
      $routes = $this->searchRoute($routes, $request->input("departurePort"), $request->input("arrivalPort"));
    }else if(!isset($departureGroupPlace) && isset($arrivalGroupPlace)){
      foreach($arrivalGroupPlace->places as $arrivalPort){
        $routes = $this->searchRoute($routes, $request->input("departurePort"), $arrivalPort->id);
      }
    }
    $data["availableRoutes"] = $routes;

    if($requestedData->isRoundTrip){
      $departureGroupPlace = GroupOfPlace::find($request->input("arrivalPort"));
      $arrivalGroupPlace = GroupOfPlace::find($request->input("departurePort"));

      $returnRoutes = array();
      if(isset($departureGroupPlace) && !isset($arrivalGroupPlace)){
        foreach($departureGroupPlace->places as $departurePort){
          $returnRoutes = $this->searchRoutes($returnRoutes, $departurePort->id, $request->input("departurePort"));
        }
      }else if(!isset($departureGroupPlace) && !isset($arrivalGroupPlace)){
        $returnRoutes = $this->searchRoutes($returnRoutes, $request->input("arrivalPort"), $request->input("depaturePort"));
      }else if(!isset($departureGroupPlace) && isset($arrivalGroupPlace)){
        foreach($arrivalGroupPlace->places as $arrivalPort){
          $returnRoutes = $this->searchRoute($returnRoutes, $request->input("arrivalPort"), $arrivalPort->id);
        }
      }

      $selected = null;
      if($request->session()->has("booking.2way.return")){
        if(!isset($selected)) $selected = new \stdClass();
        $selected->return = $request->session()->get("booking.2way.return");
      }
      
      if($request->session()->has("booking.2way.depart")){
        if(!isset($selected)) $selected = new \stdClass();
        $selected->depart = $request->session()->get("booking.2way.depart");
      }
      $data["selected"] = $selected;
      $data["availableReturnRoutes"] = $returnRoutes;
    }

    $vessels = array();
    foreach($routes as $route){
      foreach($route->vessels as $vessel){
        $duplicate = false;
        foreach($vessels as $savedVessel){
          if($vessel->id == $savedVessel->id){
            $duplicate = true;
          }
        }
        if(!$duplicate){
          $vessels[] = $vessel;
        }
      }
    }
    $data["availableVessels"] = $vessels;

    if($data["requestedData"]->isRoundTrip){
      return view("pages.fastBoatSearch.roundTrip")->with($data);
    }
    return view("pages.fastBoatSearch.oneWay")->with($data);
  }

  public function store(Request $request){
    if(!$request->session()->get("isRoundTrip")){
      $request->session()->put("selectedRoute", $request->input("route"));
      $request->session()->put("selectedVessel", $request->input("vessel"));
    }
    return redirect("/fastBoatBooking");
  }

  public function selectReturn(Request $request){
    Validator::make($request->all(), [
      "vesselID" => "required",
      "routeID" => "required"
    ])->validate();

    $request->session()->put("booking.2way.return", $this->selectRoute($request->input("routeID"), $request->input("vesselID")));
    return redirect()->back();
  }

  public function selectDepart(Request $request){
    Validator::make($request->all(), [
      "vesselID" => "required",
      "routeID" => "required"
    ])->validate();

    $request->session()->put("booking.2way.depart", $this->selectRoute($request->input("routeID"), $request->input("vesselID")));
    return redirect()->back();
  }


}