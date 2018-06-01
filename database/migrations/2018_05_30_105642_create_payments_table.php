<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('payments', function (Blueprint $table) {
      $table->increments('id');
      $table->string("payeeFullName");
      $table->integer("amount");
      $table->string("payment_method_id");
      $table->integer("payment_status_id");
      $table->integer("currency_id");
      $table->string("booking_id");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('payments');
  }
}
