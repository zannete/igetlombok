<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Traveller;
use App\TourPackage;
use App\TourBooking;
use App\TourItenary;
use App\Nationality;

class TourInputTravellersController extends Controller{
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
    $data["trip"] = $trip;
    $data["nationalites"] = Nationality::all();

    return view("pages.tourInputTravellers")->with($data);
  }
  
  public function store(Request $request){
    Validator::make($request->all(), [
      "fullName" => "required",
      "phoneNumber" => "required",
      "email" => "required", 
      "title" => "required",
      "personalID" => "required"
    ])->validate();

    if(!$request->session()->has("booking.tour.packageID")) return redirect()->back();

    $contactPerson = User::firstOrNew(["email" => $request->input("email")]);
    $contactPerson->fullName = $request->input("fullName")[0];
    $contactPerson->phoneNumber = $request->input("phoneNumber");

    $travellers = array();
    $counter = 1;
    $totalPrice = 0;
    $package = TourPackage::findOrFail($request->session()->get("booking.tour.packageID"));
    foreach($request->input("title") as $title){
      $usedIndex = ($title == "Child" || $title == "Infant")? $counter + 1: $counter;
      
      $traveller = new Traveller();
      $traveller->title = $title;
      $traveller->fullName = $request->input("fullName")[$usedIndex];
      $traveller->personalID = ($title == "Child" || $title == "Infant")?null: $request->input("personalID")[$usedIndex - 1];
      $traveller->ageLevel = ($title == "Child" || $title == "Infant")? $title: "Adult";
      $traveller->nationality_id = $request->input("nationality")[$usedIndex - 1];
      $counter = $counter + 2;
      $travellers[] = $traveller;

      if($traveller->ageLevel == "Adult" || $traveller->ageLevel == "Child"){
        $totalPrice = $totalPrice + $package->price;
      }
    }

    $booking = new TourBooking();
    $booking->departureDate = date_format(date_create($request->session()->get("booking.tour.departureDate")), "U");
    $booking->totalPrice = $totalPrice;
    $booking->tour_package_id = $package->id;
    
    try{
      DB::transaction(function() use($contactPerson, $booking, $travellers){
        $contactPerson->save();
        $booking->user_id = $contactPerson->id;
        $booking->save();
        $booking->bookingNumber = date("YmdHisu");
        $booking->save();
        foreach($travellers as $traveller){
          $traveller->user_id = $contactPerson->id;
          $traveller->save();
          $booking->travellers()->attach($traveller->id);
        }
      });
    }catch(\Exception $e){
      return redirect()->back();
    }
    $request->session()->put("booking.tour.id", $booking->id);

    return redirect("/tourBooking/review");
  }
}
