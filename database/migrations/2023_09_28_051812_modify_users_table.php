<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // name Feld löschen
            $table->dropColumn('name');

            // vorname und nachname Felder hinzufügen
            $table->string('first_name');
            $table->string('last_name');

            // Weitere neue Felder hinzufügen
            $table->string('street')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Neue Felder löschen
            $table->dropColumn('street');
            $table->dropColumn('postal_code');
            $table->dropColumn('city');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');

            // ursprüngliches name Feld wiederherstellen
            $table->string('name');
        });
    }
}
