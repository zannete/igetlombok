<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourItenariesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "orderNumber" => 1, "title" => "Day 1", "description" => "We leave basecamp and start the hike trough the tropical rain forest. After 5 hours hike, we reach the 3rd basecamp for having lunch. At 3 pm we continue our trip to the 1st rim for the night camp, where we will enjoy spectacular view and beautiful sunset, the camp also overlook the crater segaraanak lake and the new volcanic rise up from the lake, that we called “Gunungbarujari”.", "tour_package_id" => 2),
      array("id" => 2, "orderNumber" => 2, "title" => "Day 2", "description" => "We will wake up at 5.30 am to enjoy the sunrise from the east, while enjoying sunrise, the porter will make the breakfast for you. After you take the breakfast we will back down again to senaru village where we were start the trek.", "tour_package_id" => 2),
      array("id" => 3, "orderNumber" => 1, "title" => "LOMBOK (KAYANGAN  HARBOUR, East Lombok) – Kanawa Island – GiliBOLA  (overnight)", "description" => "from Senggigi : 08.30am <br/>Meeting Point at BANGSAL (PANDU RESTAURANT) than Boat departure from Kayangan harbor at 12.00pm-13.00pm after lunch then the boat trip start sailing to  Kanawa Island (Sumbawa) & GiliBOLA  Island.", "tour_package_id" => 1),
      array("id" => 4, "orderNumber" => 2, "title" => "MOYO – SATONDA ISLAND", "description" => "The sun shine reflection from Sun Rise wake you up than enjoy fresh breakfast with Indonesian breakfast or continental breakfast than start to explores Moyo Island for snorkeling and Jungle trek , this trek is take approximately 2 hours to explore the nature of Moyo Island which is reach of Flora and Fauna , then enjoy the amazing atmosphere at Moyo Waterfall for swimming in fresh water river and relaxing before going back to boat to enjoy lunch services by our friendly crews ,  the trips continue for visiting Satonda Island to observe the island which is have beautiful salt water lake and nice view of the cliff surrounding by stunning sun set than stay over night on boat for 2nd night.", "tour_package_id" => 1),
      array("id" => 5, "orderNumber" => 3, "title" => "GILI LABA –  MANTA POINT – PINK BEACH – KALONG ISLAND (overnight)", "description" => "Its approximately 14 hours night sail before arrive in Laba Island , this island is known as Manta Point We will have big chance to swim and snorkeling with MANTA and lot of different fish and colorful corals and other marine life then proceed to reach red beach , From the boat we can see spectacular beach surrounding by red sand the red sand color come from the coral reflection , here we spend times again for beautiful snorkeling then end up by enjoy sun set at Kalong island surrounding by hundreds of flying foxes , than stay the 3rd night on boat.", "tour_package_id" => 1),
      array("id" => 6, "orderNumber" => 4, "title" => "KALONG ISLAND – KOMODO ISLAND – RINCA ISLAND –  LABUAN BAJO", "description" => "This is the high light of the adventure by visiting the Komodo Dragon Island , the island where we will explore the world of heritages the Komodo Dragon , exploring this island by hiking with rangers and hunting Komodo Dragon by camera and also we can see many other wild animals likes : deer , buffaloes – horses – king cobra and may others return to the boat for lunch breaks then visiting RINCA island also the island where we will do other explorer to see Komodo Dragon , then boat end up at Labuhan Bajo the harbor in west of flores , stay night on boat or continue for next trip is the option for the groups.", "tour_package_id" => 1),
    );

    foreach($data as $datum){
      DB::table("tour_itenaries")->insert($datum);
    }
  }
}
