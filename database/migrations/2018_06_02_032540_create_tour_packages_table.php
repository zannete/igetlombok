<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPackagesTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('tour_packages', function (Blueprint $table) {
      $table->increments('id');
      $table->string("name");
      $table->integer("price");
      $table->longText("description");
      $table->integer("durationNights");
      $table->integer("durationDays");
      $table->integer("tour_id");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('tour_packages');
  }
}
