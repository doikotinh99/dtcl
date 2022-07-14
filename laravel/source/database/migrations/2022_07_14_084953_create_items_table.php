<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("index");
            $table->string("image");
            $table->string("rank");
            $table->unsignedBigInteger("base1")->nullable();
            $table->unsignedBigInteger("base2")->nullable();
            $table->timestamps();
            $table->foreign("base1")
                ->references('id')
                ->on('items')
                ->onDelete('cascade');
            $table->foreign("base2")
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
        Schema::dropIfExists('items');
    }
}
