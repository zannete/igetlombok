<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model{
  public $incrementing = false;
  protected $keyType = "string";

  public function payments(){
    return $this->hasMany("App\Payment");
  }
}
