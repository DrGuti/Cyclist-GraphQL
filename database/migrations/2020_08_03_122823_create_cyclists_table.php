<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyclistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cyclists', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('city')->nullable();
            $table->date('birth_day')->nullable();
            $table->unsignedInteger('weigth')->nullable();
            $table->unsignedFloat('height')->nullable();
            $table->string('url')->nullable();
            $table->unsignedBigInteger('team_id')->nullable();

            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cyclists');
    }
}
