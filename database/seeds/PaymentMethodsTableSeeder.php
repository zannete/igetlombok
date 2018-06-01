<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => "credit_card", "name" => "Credit Card"),
      array("id" => "bank_transfer", "name" => "Bank Transfer")
    );

    foreach($data as $datum){
      DB::table("payment_methods")->insert($datum);
    }
  }
}
