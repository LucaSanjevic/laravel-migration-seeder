<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addColumnsToviaggio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('viaggio', function (Blueprint $table) {
            $table->string('destinazione', 255)->nullable();
            $table->string('hotel', 255)->nullable();
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->decimal('prezzo');
            $table->string('durata')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('viaggio', function (Blueprint $table) {
            $table->dropColumn('destinazione');
            $table->dropColumn('hotel');
            $table->dropColumn('data_partenza');
            $table->dropColumn('data_arrivo');
            $table->dropColumn('prezzo');
            $table->dropColumn('durata');
        });
    }
}