<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitevisitInternalcaddocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitevisit_internalcaddocuments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_visit_id')->nullable();
            $table->unsignedBigInteger('file_id')->nullable();
            $table->foreign('site_visit_id')->references('id')->on('site_visits')->onDelete('cascade');
            $table->foreign('file_id')->references('id')->on('upload_files');
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
        Schema::dropIfExists('sitevisit_internalcaddocuments');
    }
}
