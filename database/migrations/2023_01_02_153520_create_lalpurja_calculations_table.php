<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLalpurjaCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lalpurja_calculations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_visit_id');
            $table->string('sheet_no');
            $table->unsignedBigInteger('kita_no');
            $table->unsignedBigInteger('ropani_as_lalpurja')->nullable();
            $table->unsignedBigInteger('anna_as_lalpurja')->nullable();
            $table->unsignedBigInteger('paisa_as_lalpurja')->nullable();
            $table->double('dam_as_lalpurja')->nullable();
            $table->double('sqm_as_lalpurja')->nullable();
            $table->double('area_in_anna_as_lalpurja')->nullable();
            $table->double('sqf_as_lalpurja')->nullable();
            $table->string('rapd_as_lalpurja')->nullable();


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
        Schema::dropIfExists('lalpurja_calculations');
    }
}
