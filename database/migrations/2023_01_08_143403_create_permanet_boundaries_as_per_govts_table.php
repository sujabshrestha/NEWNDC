<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermanetBoundariesAsPerGovtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permanet_boundaries_as_per_govts', function (Blueprint $table) {
            $table->id();
            $table->string('kita_no')->nullable();
            $table->string('east')->nullable();
            $table->string('west')->nullable();
            $table->string('north')->nullable();
            $table->string('south')->nullable();
            // May Need To Change To Valuation Table Instead of Valuation Details Table
            $table->unsignedBigInteger('valuation_details_id');
            $table->foreign('valuation_details_id')->references('id')->on('valuation_details');
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
        Schema::dropIfExists('permanet_boundaries_as_per_govts');
    }
}
