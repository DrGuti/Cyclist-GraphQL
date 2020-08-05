<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('abbrevation');
            $table->string('country');
            $table->string('url')->nullable();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('bike_id')->nullable();

            $table->foreign('class_id')->references('id')->on('team_classes');
            $table->foreign('bike_id')->references('id')->on('bikes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
