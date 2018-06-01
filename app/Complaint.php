<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model{
  public function booking(){
    return $this->belongsTo("App\Booking");
  }

  public function responses(){
    return $this->hasMany("App\ComplaintResponse");
  }
}
