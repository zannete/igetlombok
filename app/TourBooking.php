<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model{
  public function travellers(){
    return $this->belongsToMany("App\Traveller", "tour_bookings_has_travellers")
                ->withTimestamps();
  }

  public function package(){
    return $this->belongsTo("App\TourPackage");
  }

  public function user(){
    return $this->belongsTo("App\User");
  }

  public function payment(){
    return $this->belongsTo("App\Payment");
  }
}
