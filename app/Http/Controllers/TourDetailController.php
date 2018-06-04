<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TourItenary;
use App\TourPackage;
use App\TourPackageInclude;
use App\TourPackageExclude;

class TourDetailController extends Controller{
  public function index(Request $request){
    if(!$request->session()->has("booking.tour.departureDate")) return redirect()->back();
    if(!$request->session()->has("booking.tour.numberOfTraveller")) return redirect()->back();
    if(!$request->session()->has("booking.tour.packageID")) return redirect()->back();

    $data["itenaries"] = TourItenary::where("tour_package_id", $request->session()->get("booking.tour.packageID"))->orderBy("orderNumber")->get();
    $data["booking"] = new \stdClass();
    $data["booking"]->package = TourPackage::find($request->session()->get("booking.tour.packageID"));
    $data["booking"]->package->type = ($request->session()->get("booking.tour.numberOfTraveller") > 10)?"Group": "Private";
    $data["booking"]->departureDate = $request->session()->get("booking.tour.departureDate");
    $data["booking"]->numberOfTraveller = $request->session()->get("booking.tour.numberOfTraveller");

    /* Manipulasi data untuk menggunakan priceDetail.blade.php */
    $trip = new \stdClass();
    $trip->package = $data["booking"]->package;
    $trip->numberOfTraveller = $data["booking"]->numberOfTraveller;
    $data["trips"][] = $trip;
    
    return view("pages.tourDetail")->with($data);
  }

  public function store(Request $request){
    return redirect("/tourBooking/inputTravellers");
  }
}
