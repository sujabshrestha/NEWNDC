<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitevisitBoundariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2023_01_09_122237_create_sitevisit_boundaries_table.php
        Schema::create('sitevisit_boundaries', function (Blueprint $table) {
=======
        Schema::create('permanet_boundaries_as_per_site_visits', function (Blueprint $table) {
>>>>>>> 41767575ce9e372261318e0fdb682dd03f0700cf:database/migrations/2023_01_08_143740_create_permanet_boundaries_as_per_site_visits_table.php
            $table->id();
            $table->string('kita_no')->nullable();
            $table->string('east')->nullable();
            $table->string('west')->nullable();
            $table->string('north')->nullable();
            $table->string('south')->nullable();
            // May Need To Change To Valuation Table Instead of Valuation Details Table
            $table->unsignedBigInteger('sitevisit_id');
            $table->foreign('sitevisit_id')->references('id')->on('site_visits');
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
        Schema::dropIfExists('sitevisit_boundaries');
    }
}
