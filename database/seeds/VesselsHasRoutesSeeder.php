<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VesselsHasRoutesSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $faker = Faker\Factory::create();
    $data = array(
      array("vessel_id" => 1, "route_id" => 1, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 2, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 3, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 4, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 5, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 6, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 7, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 8, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 9, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 10, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 11, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 12, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 13, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 14, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 1, "route_id" => 15, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 1, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 2, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 3, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 4, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 5, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 6, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 7, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 8, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 9, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 10, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 11, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 12, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 13, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 14, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 2, "route_id" => 15, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 4, "route_id" => 1, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 4, "route_id" => 2, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 4, "route_id" => 3, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 4, "route_id" => 4, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 5, "route_id" => 5, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 5, "route_id" => 6, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 5, "route_id" => 7, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 5, "route_id" => 8, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 5, "route_id" => 9, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 10, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 11, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 12, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 13, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 14, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 15, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 1, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 2, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
      array("vessel_id" => 6, "route_id" => 3, "price" => $faker->numberBetween(400000, 750000), "effectiveStartDate" => 1514764800, "effectiveEndDate" => 1546300800),
    );

    foreach($data as $datum){
      DB::table("vessels_has_routes")->insert($datum);
    }
  }
}
