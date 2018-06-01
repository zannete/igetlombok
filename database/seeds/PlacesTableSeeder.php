<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $placeData = array(
      array("id" => 1, "name" => "Padang Bai"),
      array("id" => 2, "name" => "Benoa"),
      array("id" => 3, "name" => "Sanur"),
      array("id" => 4, "name" => "Serangan"),
      array("id" => 5, "name" => "Gili Trawangan"),
      array("id" => 6, "name" => "Gili Air"),
      array("id" => 7, "name" => "Lembongan"),
      array("id" => 8, "name" => "Senggigi"),
      array("id" => 9, "name" => "Teluk Kode"),
      array("id" => 10, "name" => "Bangsal")
    );

    foreach ($placeData as $place){
      DB::table("places")->insert($place);
    }
  }
}
