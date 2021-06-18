<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->integer('price');
            $table->longText('conditions');
            $table->string('quantityBalcony');
            $table->string('quantityBathroom');
            $table->string('locationImage')->nullable();
            $table->integer('square');
            $table->integer('distanceToSea');
            $table->date('end_date');

            $table->integer('complex_id')->unsigned();

            $table->foreign('complex_id')->references('id')->on('complexes');
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
        Schema::dropIfExists('flats');
    }
}
