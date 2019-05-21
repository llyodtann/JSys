<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->decimal('quantity_req', 5, 2);
            $table->decimal('cost_item', 5, 2);
            $table->string('dr_name')->references("dish_name")->on("food_items");
            $table->string('ir_name')->references("ingredient_name")->on("ingredients");
            $table->timestamps();

             $table->primary(['dr_name', 'ir_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
