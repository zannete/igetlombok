<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveller extends Model{
  public function bookings(){
    return $this->belongsToMany("App\Booking", "bookings_has_travellers")
                ->withTimestamps();
  }
}
