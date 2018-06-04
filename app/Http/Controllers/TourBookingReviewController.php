<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\TourBooking;
use App\TourPackage;
use App\PaymentMethod;
use App\Payment;

class TourBookingReviewController extends Controller{
  public function index(Request $request){
    if(!$request->session()->has("booking.tour.id")) return redirect()->back();

    $booking = TourBooking::findOrFail($request->session()->get("booking.tour.id"));
    if(isset($booking->payment) && !$request->session()->has("booking.tour.openPaymentWindow")){
      if($booking->payment->payment_statuts_id == 1){
        $request->merge(["payeeFullName" => $booking->payment->payeeFullName, "paymentMethod" => $booking->payment->payment_method_id]);
        return $this->store($request);
      }
    }else{
      $booking->departureDate = gmdate("Y-m-d", $booking->departureDate);
      $booking->package = TourPackage::findOrFail($booking->tour_package_id);

      $adultCount = $childCount = $infantCount = 0;
      $adultPrice = $childPrice = $infantPrice = 0;
      foreach($booking->travellers as $traveller){
        if($traveller->ageLevel == "Adult"){
          $adultCount += 1;
          $adultPrice += $booking->package->price;
        }else if($traveller->ageLevel == "Child"){
          $childCount += 1;
          $childPrice += $booking->package->price;
        }else if($traveller->ageLevel == "Infant"){
          $infantCount += 1;
          $infantPrice += 0;
        }
      }
      $data["adultCount"] = $adultCount;
      $data["childCount"] = $childCount;
      $data["infantCount"] = $infantCount;
      $data["adultPrice"] = $adultPrice;
      $data["childPrice"] = $childPrice;
      $data["infantPrice"] = $infantPrice;

      $data["booking"] = $booking;
      $data["paymentMethods"] = PaymentMethod::all();
      $data["openPaymentWindow"] = ($request->session()->has("booking.tour.openPaymentWindow"))?$request->session()->pull("booking.tour.openPaymentWindow", false): false;
      $data["payToken"] = ($request->session()->has("booking.tour.payToken"))?$request->session()->pull("booking.tour.payToken", null): null;
      return view("pages.tourBookingReview")->with($data);
    }
  }

  public function store(Request $request){
    Validator::make($request->all(), [
      "payeeFullName" => "required",
      "paymentMethod" => "required"
    ])->validate();

    $booking = TourBooking::findOrFail($request->session()->get("booking.tour.id"));

    $paymentID = ($request->session()->has("booking.tour.payment.id"))?$request->session()->get("booking.tour.payment.id"):-1;
    $payment = Payment::find($paymentID);
    if(!isset($payment)) $payment = new Payment();
    // try{
      DB::transaction(function() use($request, $booking, $payment){
        $payment->payeeFullName = $request->input("payeeFullName");
        $payment->amount = $booking->totalPrice;
        $payment->payment_method_id = $request->input("paymentMethod");
        $payment->payment_status_id = 1;
        $payment->currency_id = 1;
        $payment->save();

        $booking->payment_id = $payment->id;
        $booking->save();
      }, 10);
    // }catch(\Exception $e){
    //   return redirect()->back();
    // }

    $adultCount = $childCount = $infantCount = 0;
    $adultPrice = $childPrice = $infantPrice = 0;
    $booking->package = TourPackage::find($booking->tour_package_id);
    foreach($booking->travellers as $traveller){
      if($traveller->ageLevel == "Adult"){
        $adultCount += 1;
        $adultPrice += $booking->package->price;
      }else if($traveller->ageLevel == "Child"){
        $childCount += 1;
        $childPrice += $booking->package->price;
      }else if($traveller->ageLevel == "Infant"){
        $infantCount += 1;
        $infantPrice += 0;
      }
    }
    if($adultCount > 0) $itemDetails[] = ["name" => "Adult Ticket", "price" => $booking->package->price, "quantity" => $adultCount];
    if($childCount > 0) $itemDetails[] = ["name" => "Child Ticket", "price" => $booking->package->price, "quantity" => $childCount];
    if($infantCount > 0) $itemDetails[] = ["name" => "Infant Ticket", "price" => 0, "quantity" => $infantCount];

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
            "order_id" => $booking->bookingNumber,
            "gross_amount" => $booking->totalPrice
          ],
          "item_details" => $itemDetails,
          "customer_details" => [
            "first_name" => join(" ", array_slice(explode(" ", $booking->user->fullName), 0, -1)),
            "last_name" => join(" ", array_slice(explode(" ", $booking->user->fullName), -1)),
            "email" => $booking->user->email,
            "phone" => $booking->user->phoneNumber
          ]
        ]
      ]);
    // }catch(\Exception $e){
    //   $payment->payment_status_id = 4;
    //   $payment->save();
    //   return redirect("/tourBooking/payment/failed");
    // }

    $request->session()->put("booking.tour.payToken", json_decode($res->getBody())->token);
    $request->session()->put("booking.tour.openPaymentWindow", true);
    return redirect("/tourBooking/review");
  }
}
