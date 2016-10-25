<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogRequestsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('dog_requests', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('user_id')->unsigned();

      $table->boolean('gender');
      $table->string('breed');
      $table->string('location');
      $table->double('price_range_low');
      $table->double('price_range_high');
      $table->string('notes');

      $table->foreign('user_id')->references('id')->on('users');

      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('dog_requests');
  }
}
