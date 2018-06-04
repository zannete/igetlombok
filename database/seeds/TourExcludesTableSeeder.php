<?php

use Illuminate\Database\Seeder;

class TourExcludesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "Camera Fee", "tour_package_id" => 1),
      array("id" => 2, "name" => "Komodo National Park Fee", "tour_package_id" => 1),
      array("id" => 3, "name" => "Government Fee", "tour_package_id" => 1),
      array("id" => 4, "name" => "Ranger Fee", "tour_package_id" => 1)
    );

    foreach($data as $datum){
      DB::table("tour_package_excludes")->insert($datum);
    }
  }
}
