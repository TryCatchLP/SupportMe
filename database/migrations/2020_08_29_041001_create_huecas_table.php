<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huecas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('descrip', 500);
            $table->double('lat');
            $table->double('lng');
            $table->string('address', 300);
            $table->string('photo', 300);
            $table->string('phone', 15);
            $table->integer('stars');
            $table->integer('ratings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huecas');
    }
}
