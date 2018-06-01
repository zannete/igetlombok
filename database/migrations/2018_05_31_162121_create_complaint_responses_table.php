<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintResponsesTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('complaint_responses', function (Blueprint $table) {
      $table->increments('id');
      $table->string("content");
      $table->integer("complaint_id");
      $table->string("admin_email")->nullable();
      $table->string("user_id")->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('complaint_responses');
  }
}
