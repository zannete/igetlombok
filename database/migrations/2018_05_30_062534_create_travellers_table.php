<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravellersTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('travellers', function (Blueprint $table) {
      $table->increments('id');
      $table->string("title")->nullable();
      $table->string("personalID")->nullable();
      $table->string("fullName");
      $table->string("ageLevel");
      $table->string("nationality_id");
      $table->integer("user_id");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('travellers');
  }
}
