<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date("time");
            $table->float("quanlity");
            $table->unsignedBigInteger("from");
            $table->unsignedBigInteger("to");
            $table->unsignedBigInteger("transactionable_id");
            $table->string("transactionable_type");
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
        Schema::dropIfExists('transactions');
    }
}
