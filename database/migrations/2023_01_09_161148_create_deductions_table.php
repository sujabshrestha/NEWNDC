<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_visit_id');
            $table->unsignedBigInteger('deductionOfRoadSqF')->nullable();
            $table->unsignedBigInteger('landDevelopmentPercent')->nullable();
            $table->unsignedBigInteger('deductionForHighTensionSqF')->nullable();
            $table->unsignedBigInteger('deductionForLowLandSqF')->nullable();
            $table->unsignedBigInteger('deductionForRiverSqF')->nullable();
            $table->unsignedBigInteger('deductionForBoundryCorrection')->nullable();
            $table->unsignedBigInteger('deductionForIrregularShapeSloppyLand')->nullable();
            $table->unsignedBigInteger('sqMAPConsideration')->nullable();
            $table->unsignedBigInteger('rAPDAPConsideration')->nullable();
            $table->unsignedBigInteger('sqFAPConsideration')->nullable();
            $table->unsignedBigInteger('annaAPConsideration')->nullable();
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
        Schema::dropIfExists('deductions');
    }
}
