<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->string('Country',30)->primary();
            $table->string('Flag',50);
            $table->string('Coach',50);
            $table->string('Groupp',2);
            $table->integer('MP');
            $table->integer('W');
            $table->integer('D');
            $table->integer('L');
            $table->integer('GF');
            $table->integer('GA');
            $table->integer('PM');
            $table->integer('PTS');
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
        Schema::dropIfExists('groups');
    }
}
