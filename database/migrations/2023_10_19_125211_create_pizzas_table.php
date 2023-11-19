<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('user_id');
            $table->text('all_toppings');
            $table->integer('pizza_quantity');
            $table->decimal('price_pizza', 8, 2);

            // Fremdschlüsselbeziehung zur orders Tabelle
            $table->foreign('order_id')->references('id')->on('orders');

            // Fremdschlüsselbeziehung zu users Tabelle
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
}

