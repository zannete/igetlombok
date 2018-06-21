<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategoriesTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "name" => "Bali"),
      array("id" => 2, "name" => "Lombok"),
      array("id" => 3, "name" => "Gili"),
    );

    foreach($data as $datum){
      DB::table("post_categories")->insert($datum);
    }
  }
}
