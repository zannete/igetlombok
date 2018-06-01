<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "Indonesia Rupiah", "ISOCode" => "IDR")
    );

    foreach($data as $datum){
      DB::table("currencies")->insert($datum);
    }
  }
}
