<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupOfPlace extends Model{
  public $incrementing = false;
  protected $keyType = "string";

  public function places(){
    return $this->belongsToMany("App\Place", "places_has_group_of_places")
                ->withTimestamps();
  }
}
