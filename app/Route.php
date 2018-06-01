<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model{
  public function departure(){
    return $this->belongsTo("App\Place", "departurePort");
  }

  public function arrival(){
    return $this->belongsTo("App\Place", "arrivalPort");
  }

  public function vessels(){
    return $this->belongsToMany("App\Vessel", "vessels_has_routes")
                ->withPivot("price", "effectiveStartDate", "effectiveEndDate")
                ->withTimestamps();
  }

  public function bookings(){
    return $this->hasMany("App\Booking");
  }
}
