<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('flats_layouts', function (Blueprint $table) {
            $table->integer('flat_id')->unsigned();
            $table->integer('layout_id')->unsigned();
            $table->timestamps();
            $table->foreign('flat_id')->references('id')->on('flats');
            $table->foreign('layout_id')->references('id')->on('layouts');
        });
        Schema::rename('flats_layouts', 'flat_layout');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flats_layouts');
    }
}
