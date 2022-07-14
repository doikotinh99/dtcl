<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champ_stats', function (Blueprint $table) {
            $table->id();
            $table->integer("health");
            $table->integer("mana");
            $table->integer("starting_mana");
            $table->integer("armor");
            $table->integer("mr");
            $table->string("dps");
            $table->string("damage");
            $table->float("spd");
            $table->integer("crit");
            $table->integer("range");
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
        Schema::dropIfExists('champ_stats');
    }
}
