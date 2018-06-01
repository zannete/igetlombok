<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourSeacrchController extends Controller{
  public function index(){
    return view("pages.tourSearch");
  }
}
