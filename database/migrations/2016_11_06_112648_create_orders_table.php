<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->integer('seller_id')->unsigned();

      $table->string('payment')->nullable();

      $table->dateTime('buyer_approved_at')->nullable();
      $table->dateTime('seller_approved_at')->nullable();

      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('seller_id')->references('id')->on('users');

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
    Schema::drop('orders');
  }
}
