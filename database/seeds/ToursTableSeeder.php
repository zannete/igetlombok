<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "Komodo"),
      array("id" => 2, "name" => "Rinjani Mountain")
    );

    foreach($data as $datum){
      DB::table("tours")->insert($datum);
    }
  }
}
