<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Complaint;

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

    $data["complaints"] = $complaints;
    $data["bookings"] = $user->bookings;
    $data["user"] = $user;
    return view("pages.dashboard.index")->with($data);
  }

}
