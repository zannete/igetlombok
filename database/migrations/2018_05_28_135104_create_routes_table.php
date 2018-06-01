<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('routes', function (Blueprint $table) {
      $table->increments('id');
      $table->integer("departurePort");
      $table->time("departureTime");
      $table->integer("arrivalPort");
      $table->time("arrivalTime");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('routes');
  }
}
