<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("from");
            $table->unsignedBigInteger("to");
            $table->float("quantity");
            $table->string("code");
            $table->time("time");
            $table->integer("status");
            $table->timestamps();
            $table->foreign("from")
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign("to")
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('transfers');
    }
}
