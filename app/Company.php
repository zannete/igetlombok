<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model{
  public function vessels(){
    return $this->hasMany("App\Vessel");
  }
}
