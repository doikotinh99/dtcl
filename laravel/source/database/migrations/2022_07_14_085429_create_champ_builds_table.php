<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champ_builds', function (Blueprint $table) {
            $table->id();
            $table->integer("star")->nullable();
            $table->unsignedBigInteger("champ_id");
            $table->unsignedBigInteger("item1");
            $table->unsignedBigInteger("item2");
            $table->unsignedBigInteger("item3");
            $table->timestamps();
            $table->foreign("item1")
                ->references('id')
                ->on('items')
                ->onDelete('cascade');
            $table->foreign("item2")
                ->references('id')
                ->on('items')
                ->onDelete('cascade');
            $table->foreign("item3")
                ->references('id')
                ->on('items')
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
        Schema::dropIfExists('champ_builds');
    }
}
