<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('ads', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->integer('breed_id')->unsigned();

      $table->string('title');
      $table->string('location');
      $table->text('description');

      $table->double('price', 10, 2);

      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('breed_id')->references('id')->on('breeds');

      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('ads');
  }
}
