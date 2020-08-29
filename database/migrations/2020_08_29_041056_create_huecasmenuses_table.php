<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuecasmenusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huecasmenuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menuses');
            $table->foreignId('hueca_id')->constrained();
            $table->double('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huecasmenuses');
    }
}
