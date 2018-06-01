<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vessel extends Model{
  public function company(){
    return $this->belongsTo("App\Company");
  }

  public function routes(){
    return $this->belongsToMany("App\Route", "vessels_has_routes")
                ->withPivot("price", "effectiveStartDate", "effectiveEndDate")
                ->withTimestamps();
  }

  public function bookings(){
    return $this->hasMany("App\Booking");
  }
}
