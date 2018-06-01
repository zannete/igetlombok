<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => "ID", "name" => "Indonesia"),
      array("id" => "AU", "name" => "Australia"),
      array("id" => "US", "name" => "United States")
    );

    foreach($data as $datum){
      DB::table("nationalities")->insert($datum);
    }
  }
}
