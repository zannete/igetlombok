<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatusesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "Pending From Traveller"),
      array("id" => 2, "name" => "Pending From Bank Confirmation"),
      array("id" => 3, "name" => "Confirmed"),
      array("id" => 4, "name" => "Failed")
    );

    foreach($data as $datum){
      DB::table("payment_statuses")->insert($datum);
    }
  }
}
