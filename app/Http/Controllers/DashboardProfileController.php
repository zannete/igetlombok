<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardProfileController extends Controller{
  public function update(Request $request){
    Validator::make($request->all(), [
      "fullName" => "required|string|max:255",
      "email" => "required|string|email|max:255",
      "phoneNumber" => "required|integer"
    ])->validate();

    $user = Auth::user();
    $user->fullName = $request->input("fullName");
    $user->email = $request->input("email");
    $user->phoneNumber = $request->input("phoneNumber");
    $user->save();
    return redirect("/dashboard")->with("success", "Profile data change success.");
  }

  public function changePassword(Request $request){
    Validator::make($request->all(),[
      "oldPassword" => "required|string|max:255",
      "newPassword" => "required|string|confirmed"
    ])->validate();

    $user = Auth::user();
    if(Hash::check($request->input("oldPassword"), $user->password)){
      $user->password = Hash::make($request->input("newPassword"));
      $user->save();
      return redirect("/dashboard")->with("success", "Password change success.");
    }
    return redirect("/dashboard")->withErrors(["Please check your old password."]);
  }
}
