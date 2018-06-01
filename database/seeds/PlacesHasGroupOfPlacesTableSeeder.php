<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesHasGroupOfPlacesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("place_id" => 1, "group_of_place_id" => "G1"),
      array("place_id" => 2, "group_of_place_id" => "G1"),
      array("place_id" => 3, "group_of_place_id" => "G1"),
      array("place_id" => 4, "group_of_place_id" => "G1"),
    );
    foreach($data as $datum){
      DB::table("places_has_group_of_places")->insert($datum);
    }
  }
}
