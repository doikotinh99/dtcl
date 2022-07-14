<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("cost");
            $table->string("image");
            $table->unsignedBigInteger("traits_id");
            $table->unsignedBigInteger("skill_id");
            $table->unsignedBigInteger("stats_id");
            $table->timestamps();
            $table->foreign("traits_id")
                ->references('id')
                ->on('traits')
                ->onDelete('cascade');
            $table->foreign("skill_id")
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');
            $table->foreign("stats_id")
                ->references('id')
                ->on('champ_stats')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champs');
    }
}
