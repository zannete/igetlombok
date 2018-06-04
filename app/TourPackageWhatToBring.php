<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourPackageWhatToBring extends Model{
  public function package(){
    return $this->belongTo("App\TourPackage");
  }
}
