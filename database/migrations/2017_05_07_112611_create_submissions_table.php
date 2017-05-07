<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->tinyInteger('poster_submitted')->default(0);
            $table->string('poster_path')->nullable();
            $table->text('synopsis')->nullable();
            $table->tinyInteger('synopsis_submitted')->default(0);
            $table->tinyInteger('movie_submitted')->default(0);
            $table->string('submission_method')->nullable();
            $table->tinyInteger('payment_submitted')->default(0);
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
        Schema::drop('submissions');
    }
}
