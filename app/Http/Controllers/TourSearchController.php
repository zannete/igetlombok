<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\TourPackage;

class TourSearchController extends Controller{
  public function index(Request $request){
    Validator::make($request->all(),[
      "departureDate" => "required",
      "destination" => "required",
      "duration" => "required", 
      "numberOfTraveller" => "required"
    ])->validate();

    $data["packages"] = TourPackage::where("tour_id", $request->input("destination"))->get();
    $request->session()->put("booking.tour.departureDate", $request->input("departureDate"));
    $request->session()->put("booking.tour.numberOfTraveller", $request->input("numberOfTraveller"));

    return view("pages.tourSearch")->with($data);
  }

  public function store(Request $request){
    Validator::make($request->all(), [
      "packageID" => "required"
    ])->validate();

    $request->session()->put("booking.tour.packageID", $request->input("packageID"));
    return redirect("/tourDetail");
  }
}
