<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model{
  public $incrementing = false;
  protected $keyType = "string";

  public function travellers(){
    return $this->belongsToMany("App\Traveller", "bookings_has_travellers")
                ->withTimestamps();
  }

  public function vessel(){
    return $this->belongsTo("App\Vessel");
  }

  public function route(){
    return $this->belongsTo("App\Route");
  }

  public function payment(){
    return $this->hasOne("App\Payment");
  }

  public function user(){
    return $this->belongsTo("App\User");
  }

  public function complaint(){
    return $this->hasOne("App\Complaint");
  }
}
