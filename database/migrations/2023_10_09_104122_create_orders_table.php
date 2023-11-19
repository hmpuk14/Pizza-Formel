<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('order_date');
            $table->integer('pizza_quantity');
            $table->text('all_toppings');
            $table->decimal('price_pizza', 8, 2);
            $table->decimal('total_price', 8, 2);
            $table->timestamps();

            // Fremdschlüsselbeziehung zu users Tabelle
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
