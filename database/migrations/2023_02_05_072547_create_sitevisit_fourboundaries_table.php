<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitevisitFourboundariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitevisit_fourboundaries', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('site_visit_id')->nullable();
            $table->unsignedBigInteger('four_boundary_id')->nullable();

            $table->foreign('four_boundary_id')->references('id')->on('four_sitevisit_boundaries')->onDelete('set null');
            $table->foreign('site_visit_id')->references('id')->on('site_visits')->onDelete('set null');
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
        Schema::dropIfExists('sitevisit_fourboundaries');
    }
}
