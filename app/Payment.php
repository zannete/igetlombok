<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model{
  public function paymentMethod(){
    return $this->belongsTo("App\PaymentMethod");
  }

  public function paymentStatus(){
    return $this->belongsTo("App\PaymentStatus");
  }

  public function booking(){
    return $this->belongsTo("App\Booking");
  }

  public function tourBooking(){
    return $this->hasOne("App\Booking");
  }
}
