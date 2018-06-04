<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model{
  public function tour(){
    return $this->belongsTo("App\Tour");
  }

  public function itenaries(){
    return $this->hasMany("App\TourItenary");
  }

  public function includes(){
    return $this->hasMany("App\TourPackageInclude");
  }

  public function excludes(){
    return $this->hasMany("App\TourPackageExclude");
  }

  public function whatToBrings(){
    return $this->hasMany("App\TourPackageWhatToBring");
  }

  public function bookings(){
    return $this->hasMany("App\TourBooking");
  }
}
