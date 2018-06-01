<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Complaint;
use App\ComplaintResponse;

class ComplaintDetailController extends Controller{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    if(!$request->has("complaint_id")) return redirect()->back();

    $complaint = Complaint::find($request->input("complaint_id"));
    if(!isset($complaint)) return redirect()->back();
    $request->session()->put("complaint.id", $request->input("complaint_id"));

    $user = Auth::user();
    $data["bookings"] = $user->bookings;
    $data["user"] = $user;
    $data["complaint"] = $complaint;
    
    return view("pages.dashboard.complaintDetail")->with($data);
  }

  public function store(Request $request){
    Validator::make($request->all(), [
      "response" => "required|string"
    ])->validate();

    if(!$request->session()->has("complaint.id")) return redirect()->back();

    $complaint = Complaint::find($request->session()->pull("complaint.id", null));
    if(!isset($complaint)) return redirect()->back();

    $response = new ComplaintResponse();
    $response->content = $request->input("response");
    $response->complaint_id = $complaint->id;
    $response->user_id = Auth::user()->id;
    $response->save();

    return redirect("/complaint/detail?complaint_id=". $complaint->id)->with("success", "Your complaint has been submitted. Please give us time to response.");
  }
}
