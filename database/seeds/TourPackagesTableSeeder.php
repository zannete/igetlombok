<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourPackagesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $faker = Faker\Factory::create();
    $data = array(
      array("id" => 1, "name" => "The Best Komodo Island", "price" => $faker->numberBetween(7000000, 10000000), "description" => "Komodo National Park is a national park in Indonesia located within the Lesser Sunda Islands in the border region between the provinces of East Nusa Tenggara and West Nusa Tenggara. The park includes the three larger islands Komodo, Padar and Rinca, and 26 smaller ones The national park was founded in 1980 to protect the Komodo dragon, the world's largest lizard. Later it was dedicated to protecting other species, including marine species. In 1991 the national park was declared a UNESCO World Heritage Site.", "durationDays" => 4, "durationNights" => 3, "tour_id" => 1),
      array("id" => 2, "name" => "Senaru Crater", "price" => $faker->numberBetween(7000000, 10000000), "description" => "The mighty Rinjani mountain of Gunung Rinjani is a massive volcano which towers over the island of Lombok. A climb to the top is one of the most exhilarating experiences you can have in Indonesia. At 3,726 meters tall, Gunung Rinjani is the second highest mountain in Indonesia. The climb to the top may not be easy but it’s worth it, and is widely regarded as one of the best views in the country.", "durationDays" => 2, "durationNights" => 1, "tour_id" => 2),
      array("id" => 3, "name" => "Senaru to Summit", "price" => $faker->numberBetween(7000000, 10000000), "description" => "The mighty Rinjani mountain of Gunung Rinjani is a massive volcano which towers over the island of Lombok. A climb to the top is one of the most exhilarating experiences you can have in Indonesia. At 3,726 meters tall, Gunung Rinjani is the second highest mountain in Indonesia. The climb to the top may not be easy but it’s worth it, and is widely regarded as one of the best views in the country.", "durationDays" => 3, "durationNights" => 2, "tour_id" => 2),
      array("id" => 4, "name" => "Sembalun to Summit", "price" => $faker->numberBetween(7000000, 10000000), "description" => "The mighty Rinjani mountain of Gunung Rinjani is a massive volcano which towers over the island of Lombok. A climb to the top is one of the most exhilarating experiences you can have in Indonesia. At 3,726 meters tall, Gunung Rinjani is the second highest mountain in Indonesia. The climb to the top may not be easy but it’s worth it, and is widely regarded as one of the best views in the country.", "durationDays" => 2, "durationNights" => 1, "tour_id" => 2)
    );

    foreach($data as $datum){
      DB::table("tour_packages")->insert($datum);
    }
  }
}
