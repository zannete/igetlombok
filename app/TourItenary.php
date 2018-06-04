<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourItenary extends Model{
  public function package(){
    return $this->belongsTo("App\TourPackage");
  }
}
