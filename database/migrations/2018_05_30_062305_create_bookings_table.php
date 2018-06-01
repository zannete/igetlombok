<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('bookings', function (Blueprint $table) {
      $table->string('id');
      $table->integer("departureDate");
      $table->integer("totalPrice");
      $table->integer("vessel_id");
      $table->integer("route_id");
      $table->integer("complaint_id")->nullable();
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
    Schema::dropIfExists('bookings');
  }
}
