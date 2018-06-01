<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComplaintTypesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "Inquiry"),
      array("id" => 2, "name" => "Refund"),
      array("id" => 3, "name" => "Reschedule")
    );

    foreach($data as $datum){
      DB::table("complaint_types")->insert($datum);
    }
  }
}
