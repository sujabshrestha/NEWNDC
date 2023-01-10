<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateofLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rateof_lands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_visit_id');
            $table->unsignedBigInteger('perSqFAPGovRate')->nullable();
            $table->string('govPage')->nullable();
            $table->string('perAnnaAPGovRate')->nullable();
            $table->string('perRopaniAPGovRate')->nullable();
            $table->string('perSqFAPMarketRate')->nullable();
            $table->string('perAnnaAPMarketRate')->nullable();
            $table->string('perRopaniAPMarketRate')->nullable();
            $table->string('perSqFAPFairRate')->nullable();
            $table->string('perAnnaAPFairRate')->nullable();
            $table->string('perRopaniAPFairRate')->nullable();
            $table->string('perSqFAPDistressRate')->nullable();
            $table->string('perAnnaAPDistressRate')->nullable();
            $table->string('governmentValueOfLand')->nullable();
            $table->string('commercialValueOfLand')->nullable();
            $table->string('fairMarketValueOfLand')->nullable();
            $table->string('distressValueOfLand')->nullable();
            $table->string('fairMarketValueOfLandAndBuilding')->nullable();
            $table->string('totalDistressValueOfLandAndBuimding')->nullable();

            $table->foreign('site_visit_id')->references('id')->on('site_visits')->onDelete('cascade');

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
        Schema::dropIfExists('rateof_lands');
    }
}
