<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $faker = Faker\Factory::create();
    $data = array(
      array("id" => 1, "name" => "Blue Water Express", "logo" => "http://via.placeholder.com/100x100", "termsConditions" => $faker->text(5000)),
      array("id" => 2, "name" => "Eka Jaya", "logo" => "http://via.placeholder.com/100x100", "termsConditions" => $faker->text(5000)),
    );

    foreach($data as $datum){
      DB::table("companies")->insert($datum);
    }      
  }
}
