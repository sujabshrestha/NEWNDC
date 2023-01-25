<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandbasedCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landbased_calculations', function (Blueprint $table) {
            $table->id();
            $table->string('areaSymbol')->nullable();
            $table->string('sideA')->nullable();
            $table->string('sideB')->nullable();
            $table->string('sideC')->nullable();
            $table->string('sideS')->nullable();
            $table->unsignedDouble('sqFAPMeasurement')->nullable();
            $table->unsignedDouble('sqMAPMeasurement')->nullable();
            $table->unsignedDouble('areaInAnnaAPMeasurement')->nullable();
            $table->unsignedBigInteger('site_visit_id');
            $table->foreign('site_visit_id')->references('id')->on('site_visits')->onDelete('cascade');
            // $table->??
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
        Schema::dropIfExists('landbased_calculations');
    }
}
