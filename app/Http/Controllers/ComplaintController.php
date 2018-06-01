<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\ComplaintType;
use App\Complaint;
use App\Booking;

class ComplaintController extends Controller{
  /* ComplaintController bertanggung jawab untuk mengurus complaint baru. Bukan untuk menampilkan daftar complaint */
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $user = Auth::user();

    $data["selectedBookingID"] = ($request->has("booking_id"))?$request->input("booking_id"):"";
    $data["complaintTypes"] = ComplaintType::all();
    $data["bookings"] = $user->bookings;
    $data["user"] = $user;
    return view("pages.dashboard.complaint")->with($data);
  }

  public function store(Request $request){
    Validator::make($request->all(), [
      "bookingID" => "required|string",
      "subject" => "required|string",
      "description" => "required|string",
      "complaintType" => "required"
    ])->validate();

    $booking = Booking::find($request->input("bookingID"));
    if(!isset($booking)){
      return redirect()->back()->withErrors(["Please check your Booking ID"]);
    }
    if($booking->complaint_id !== null){
      return redirect()->back()->withErrors(["You have active complaint for this booking ID, please use follow up from that complaint."]);
    }


    $complaint = new Complaint();
    $complaint->subject = $request->input("subject");
    $complaint->description = $request->input("description");
    $complaint->complaint_type_id = $request->input("complaintType");
    $complaint->complaint_status_id = 1;
    $complaint->user_id = Auth::user()->id;

    try{
      DB::transaction(function() use($complaint, $booking, $request){
        $complaint->save();
        $booking->complaint_id = $complaint->id;
        $booking->save();
      });
    }catch(\Exception $e){
      return redirect()->back()->withErrors(["Ops! Something went wrong, please try again"]);
    }
    return redirect("/dashboard")->with("success", "Your complaint has been submitted. Please allow us to review and get back to you.");
  }
}
