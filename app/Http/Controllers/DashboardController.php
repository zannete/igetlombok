<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Complaint;
use App\TourPackage;

class DashboardController extends Controller{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $user = Auth::user();

    $complaints = new \stdClass();
    $complaints->activeComplaints = [];
    $complaints->resolvedComplaints = [];
    foreach($user->bookings as $booking){
      if(isset($booking->complaint_id)){
        $complaint = Complaint::find($booking->complaint_id);
        if($complaint->complaint_status_id != 2){
          $complaints->activeComplaints[] = $complaint;
        }else{
          $complaints->resolvedComplaints[] = $complaint;
        }
      }
    }

    $allBookings = array();
    foreach($user->bookings as $booking) {
      $booking->type = "FastBoat";
      $allBookings[] = $booking;
    }
    foreach($user->tourBookings as $booking){
      $booking->type = "Tour";
      $booking->package = TourPackage::find($booking->tour_package_id);
      $allBookings[] = $booking;
    }

    $data["complaints"] = $complaints;
    $data["bookings"] = $allBookings;
    $data["user"] = $user;
    return view("pages.dashboard.index")->with($data);
  }

}
