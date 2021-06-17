<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtyLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realty_layout', function (Blueprint $table) {
            $table->integer('realty_id')->unsigned();
            $table->integer('layout_id')->unsigned();
            $table->timestamps();
            $table->foreign('realty_id')->references('id')->on('realties');
            $table->foreign('layout_id')->references('id')->on('layouts');
        });
        Schema::rename('realty_layout', 'layout_realty');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realty_layout');
    }
}
