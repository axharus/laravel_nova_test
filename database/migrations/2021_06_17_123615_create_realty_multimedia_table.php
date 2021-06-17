<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtyMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realty_multimedia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('multimedia');
            $table->integer('realty_id')->unsigned();
            $table->timestamps();

            $table->foreign('realty_id')->references('id')->on('realties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realty_multimedia');
    }
}
