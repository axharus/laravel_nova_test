<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsInfrastructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats_infrastructures', function (Blueprint $table) {
            $table->integer('flat_id')->unsigned();
            $table->integer('infrastructure_id')->unsigned();
            $table->timestamps();
            $table->foreign('flat_id')->references('id')->on('flats');
            $table->foreign('infrastructure_id')->references('id')->on('infrastructures');
        });
        Schema::rename('flats_infrastructures', 'flat_infrastructure');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flats_infrastructures');
    }
}
