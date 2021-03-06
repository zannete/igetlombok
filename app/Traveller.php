<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveller extends Model{
  public function bookings(){
    return $this->belongsToMany("App\Booking", "tour_bookings_has_travellers")
                ->withTimestamps();
  }

  public function tourBookings(){
    return $this->belongsToMany("App\TourBooking", "tour_bookings_has_travellers")
                ->withTimestamps();
  }
}
