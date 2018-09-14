<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('Match_id');
            $table->string('Team1_name',50);
            $table->integer('Team1_goal');
            $table->integer('Team2_goal');
            $table->string('Team2_name',50);
            $table->string('Man_of_the_match',50);
            $table->string('Round',20);
            $table->string('Stadium_name',50);
            $table->foreign('Stadium_name')->references('Stadium_name')->on('stadiums');
            $table->string('Date_time');
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
        Schema::dropIfExists('matches');
    }
}
