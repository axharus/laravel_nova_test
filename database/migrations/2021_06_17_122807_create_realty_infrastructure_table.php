<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtyInfrastructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realty_infrastructure', function (Blueprint $table) {
            $table->integer('realty_id')->unsigned();
            $table->integer('infrastructure_id')->unsigned();
            $table->timestamps();
            $table->foreign('realty_id')->references('id')->on('realties');
            $table->foreign('infrastructure_id')->references('id')->on('infrastructures');
        });
        Schema::rename('realty_infrastructure', 'infrastructure_realty');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realty_infrastructure');
    }
}
