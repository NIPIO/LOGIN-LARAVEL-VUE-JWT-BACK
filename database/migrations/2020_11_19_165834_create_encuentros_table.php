<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuentros', function (Blueprint $table) {
            $table->id();
            $table->string('localidad');
            $table->string('provincia');
            $table->string('details');
            $table->string('src');
            $table->string('date');
            $table->string('time');
            $table->string('clima');
            $table->string('lat');
            $table->string('lng');
            $table->boolean('isLoaded');
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
        Schema::dropIfExists('encuentros');
    }
}
