<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuantityGramToToppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('toppings', function (Blueprint $table) {
            $table->integer('quantity_gram')->nullable();
        });
    }

    public function down()
    {
        Schema::table('toppings', function (Blueprint $table) {
            $table->dropColumn('quantity_gram');
        });
    }
}
