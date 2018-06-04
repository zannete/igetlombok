<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourPackageExclude extends Model{
  public function package(){
    return $this->belongsTo("App\TourPackage");
  }
}
