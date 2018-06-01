<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupOfPlacesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    DB::table("group_of_places")->insert([
      "id" => "G1",
      "name" => "Bali (All Ports)"
    ]);
  }
}
