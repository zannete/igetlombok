<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComplaintStatusesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "New"),
      array("id" => 2, "name" => "Resolved"),
      array("id" => 3, "name" => "Waiting User Reply"),
      array("id" => 4, "name" => "Waiting Admin Reply")
    );

    foreach($data as $datum){
      DB::table("complaint_statuses")->insert($datum);
    }
  }
}
