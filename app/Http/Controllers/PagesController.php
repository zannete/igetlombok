<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\GroupOfPlace;
use App\Tour;

class PagesController extends Controller{
  public function index(Request $request){
    /*
      Menampilkan semua data place ke dalam UI,
      place yang sudah termasuk dalam group tidak akan ditampilkan kembali.
    */
    $data = array();
    
    $places = Place::all();
    $groupOfPlaces = GroupOfPlace::all();
    
    foreach($groupOfPlaces as $group){
      $data["places"][] = $group;
      foreach($places as $place){
        $duplicate = false;
        foreach($group->places as $groupedPlace){
          if($place->id == $groupedPlace->id){
            $duplicate = true;
          }
        }
        if(!$duplicate){
          $data["places"][] = $place;
        }
      }
    }
    
    $request->session()->flush();

    $data["tours"] = Tour::all();
    return view("pages.home")->with($data);
  }
}
