<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('multimedia');
            $table->integer('flat_id')->unsigned();
            $table->timestamps();

            $table->foreign('flat_id')->references('id')->on('flats');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multimedia');
    }
}
