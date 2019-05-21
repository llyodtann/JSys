<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('transaction_number');
            $table->decimal('total_cost', 6, 2);
            $table->decimal('cash', 6, 2);
            $table->decimal('t_change', 5, 2);
            $table->decimal('total_discount', 6, 2);
            $table->primary('transaction_number');
            $table->integer('str_num');
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
        Schema::dropIfExists('transactions');
    }
}
