<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVesselsHasRoutes extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('vessels_has_routes', function (Blueprint $table) {
      $table->integer("vessel_id");
      $table->integer("route_id");
      $table->integer("price");
      $table->integer("effectiveStartDate");
      $table->integer("effectiveEndDate");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('vessels_has_routes');
  }
}
