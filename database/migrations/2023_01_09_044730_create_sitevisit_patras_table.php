<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitevisitPatrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitevisit_patras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('site_visit_id');
            $table->foreign('site_visit_id')->references('id')->on('site_visits')->onDelete('cascade');
            $table->unsignedBigInteger('patra_id');

            $table->foreign('patra_id')->references('id')->on('patras')->onDelete('cascade');

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
        Schema::dropIfExists('sitevisit_patras');
    }
}
