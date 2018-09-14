<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->string('Player_name',50)->primary();
            $table->binary('Image');
            $table->integer('Age');
            $table->string('Country',30);
            $table->foreign('Country')->references('Country')->on('groups');
            $table->string('Position',20);
            $table->integer('Jersey_number');
            $table->integer('Match_played');
            $table->integer('Goals');
            $table->integer('Assists');
            $table->integer('Attempts');
            $table->integer('Yellow_card');
            $table->integer('Red_card');
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
        Schema::dropIfExists('players');
    }
}
