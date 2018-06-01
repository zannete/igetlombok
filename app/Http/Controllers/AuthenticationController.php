<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\User;

class AuthenticationController extends Controller{
  public function index(){
    return view("auth.index");
  }
  public function register(Request $request){
    Validator::make($request->all(), [
      "email" => "required|string|email|max:255",
      "password" => "required|string|min:6|confirmed"
    ])->validate();

    $user = User::where("email", $request->input("email"))->first();
    if(isset($user) && isset($user["password"])){
      return redirect("/login");
    }else if(isset($user) && !isset($user["password"])){
      $user->password = Hash::make($request->input("password"));
      $user->save();

      $credentials = ["email" => $request->input("email"), "password" => $request->input("password")];
      if(Auth::attempt($credentials)){
        return redirect()->intended("/dashboard");
      }
      return redirect("/login");
    }else{
      return redirect("/login");
    }
  }

  public function login(Request $request){
    $credentials = $request->only("email", "password");
    if(Auth::attempt($credentials)){
      return redirect("/dashboard");
    }
    return redirect("/login");
  }

  public function logout(Request $request){
    Auth::logout();
    return redirect()->intended("/");
  }
}
