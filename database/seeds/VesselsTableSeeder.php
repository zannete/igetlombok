<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VesselsTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "BWE IX", "capacity" => 100, "company_id" => 1),
      array("id" => 2, "name" => "BWE VII", "capacity" => 50, "company_id" => 1),
      array("id" => 3, "name" => "BWE V", "capacity" => 35, "company_id" => 1),
      array("id" => 4, "name" => "Ekajaya 23", "capacity" => 180, "company_id" => 2),
      array("id" => 5, "name" => "Ekajaya 25", "capacity" => 210, "company_id" => 2),
      array("id" => 6, "name" => "Ekajaya 26", "capacity" => 210, "company_id" => 2),
    );

    foreach($data as $datum){
      DB::table("vessels")->insert($datum);
    }
  }
}
