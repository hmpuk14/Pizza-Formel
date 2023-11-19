<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('pizza_quantity');
            $table->dropColumn('all_toppings');
            $table->dropColumn('price_pizza');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'pizza_quantity')) {
                $table->integer('pizza_quantity');
            }

            if (!Schema::hasColumn('orders', 'all_toppings')) {
                $table->text('all_toppings');
            }

            if (!Schema::hasColumn('orders', 'price_pizza')) {
                $table->decimal('price_pizza', 8, 2);
            }
        });
    }
}
