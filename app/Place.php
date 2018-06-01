<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model{
  public function groups(){
    return $this->belongsToMany("App\GroupOfPlaces", "places_has_group_of_places")
                ->withTimestamps();
  }
}
