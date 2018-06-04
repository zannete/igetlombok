<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourItenariesTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('tour_itenaries', function (Blueprint $table) {
      $table->increments('id');
      $table->integer("orderNumber");
      $table->string("title");
      $table->longText("description");
      $table->integer("tour_package_id");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('tour_itenaries');
  }
}
