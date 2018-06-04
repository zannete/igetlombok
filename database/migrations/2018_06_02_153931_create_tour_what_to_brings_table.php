<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourWhatToBringsTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('tour_package_what_to_brings', function (Blueprint $table) {
      $table->increments('id');
      $table->string("name");
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
    Schema::dropIfExists('tour_package_what_to_brings');
  }
}
