<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoutesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "departurePort" => 4, "departureTime" => "08:00", "arrivalPort" => 5, "arrivalTime" => "10:30"),
      array("id" => 2, "departurePort" => 4, "departureTime" => "08:00", "arrivalPort" => 9, "arrivalTime" => "10:45"),
      array("id" => 3, "departurePort" => 4, "departureTime" => "08:00", "arrivalPort" => 6, "arrivalTime" => "10:45"),
      array("id" => 4, "departurePort" => 1, "departureTime" => "08:00", "arrivalPort" => 5, "arrivalTime" => "10:30"),
      array("id" => 5, "departurePort" => 1, "departureTime" => "08:00", "arrivalPort" => 9, "arrivalTime" => "10:45"),
      array("id" => 6, "departurePort" => 1, "departureTime" => "08:00", "arrivalPort" => 6, "arrivalTime" => "10:45"),
      array("id" => 7, "departurePort" => 1, "departureTime" => "09:15", "arrivalPort" => 5, "arrivalTime" => "10:30"),
      array("id" => 8, "departurePort" => 1, "departureTime" => "09:15", "arrivalPort" => 9, "arrivalTime" => "10:45"),
      array("id" => 9, "departurePort" => 1, "departureTime" => "09:15", "arrivalPort" => 6, "arrivalTime" => "11:00"),
      array("id" => 10, "departurePort" => 6, "departureTime" => "11:15", "arrivalPort" => 1, "arrivalTime" => "13:00"),
      array("id" => 11, "departurePort" => 6, "departureTime" => "11:15", "arrivalPort" => 4, "arrivalTime" => "14:30"),
      array("id" => 12, "departurePort" => 9, "departureTime" => "11:30", "arrivalPort" => 1, "arrivalTime" => "13:00"),
      array("id" => 13, "departurePort" => 9, "departureTime" => "11:30", "arrivalPort" => 4, "arrivalTime" => "14:30"),
      array("id" => 14, "departurePort" => 5, "departureTime" => "11:45", "arrivalPort" => 1, "arrivalTime" => "13:00"),
      array("id" => 15, "departurePort" => 5, "departureTime" => "11:45", "arrivalPort" => 4, "arrivalTime" => "14:30")
    );

    foreach($data as $datum){
      DB::table("routes")->insert($datum);
    }
  }
}
