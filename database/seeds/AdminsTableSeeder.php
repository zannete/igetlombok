<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $data = array(
      array("id" => 1, "email" => "admin@igetlombok.com", "password" => Hash::make("123213"), "name" => "Admin")
    );

    foreach($data as $datum){
      DB::table("admins")->insert($datum);
    }
  }
}
