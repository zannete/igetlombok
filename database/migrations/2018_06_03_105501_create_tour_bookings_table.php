<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourBookingsTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('tour_bookings', function (Blueprint $table) {
      $table->increments('id');
      $table->string("bookingNumber")->nullable();
      $table->integer("departureDate");
      $table->integer("totalPrice");
      $table->integer("tour_package_id");
      $table->integer("payment_id")->nullable();
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
    Schema::dropIfExists('tour_bookings');
  }
}
