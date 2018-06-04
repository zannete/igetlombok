<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourWhatToBringTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "Swim Cloth", "tour_package_id" => 1),
      array("id" => 2, "name" => "Sun Block", "tour_package_id" => 1),
      array("id" => 3, "name" => "Towel", "tour_package_id" => 1),
      array("id" => 4, "name" => "Energy Drink", "tour_package_id" => 1)
    );

    foreach($data as $datum){
      DB::table("tour_package_what_to_brings")->insert($datum);
    }
  }
}
