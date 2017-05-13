<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function(Blueprint $table)   {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('user_name', 255);
            $table->string('user_email', 255)->unique();
            $table->string('ticket_name', 255);
            $table->string('event_code', 255);
            $table->integer('ticket_price')->unsigned();
            $table->string('order_id')->unique();
            $table->dateTime('registration_timestamp');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
