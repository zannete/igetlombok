<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourIncludesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "3x Fresh Meal a day", "tour_package_id" => 1),
      array("id" => 2, "name" => "6 Large Bottled Mineral Water", "tour_package_id" => 1),
      array("id" => 3, "name" => "Coffe and Tea", "tour_package_id" => 1),
      array("id" => 4, "name" => "Snorkeling Gear", "tour_package_id" => 1),
      array("id" => 5, "name" => "Fishing Equipment", "tour_package_id" => 1),
      array("id" => 6, "name" => "Life Jacket and Raft", "tour_package_id" => 1)
    );

    foreach($data as $datum){
      DB::table("tour_package_includes")->insert($datum);
    }
  }
}
