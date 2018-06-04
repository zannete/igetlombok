<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model{
  public function packages(){
    return $this->hasMany("App\TourPackages");
  }
}
