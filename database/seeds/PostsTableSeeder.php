<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $faker = Faker\Factory::create();
    $data = array(
      array("id" => 1, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
      array("id" => 2, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 3, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 3, "updated_at" => $faker->dateTime),
      array("id" => 4, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
      array("id" => 5, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 7, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 3, "updated_at" => $faker->dateTime),
      array("id" => 8, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
      array("id" => 9, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 10, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 3, "updated_at" => $faker->dateTime),
      array("id" => 11, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
      array("id" => 12, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 13, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 3, "updated_at" => $faker->dateTime),
      array("id" => 14, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
      array("id" => 15, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 16, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 3, "updated_at" => $faker->dateTime),
      array("id" => 17, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
      array("id" => 18, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 19, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 3, "updated_at" => $faker->dateTime),
      array("id" => 20, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
      array("id" => 21, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 22, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 3, "updated_at" => $faker->dateTime),
      array("id" => 23, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 2, "updated_at" => $faker->dateTime),
      array("id" => 24, "title" => $faker->sentence(5), "body" => $faker->paragraphs(5, true), "admin_id" => 1, "post_category_id" => 1, "updated_at" => $faker->dateTime),
    );

    foreach($data as $datum){
      DB::table("posts")->insert($datum);
    }
  }
}
