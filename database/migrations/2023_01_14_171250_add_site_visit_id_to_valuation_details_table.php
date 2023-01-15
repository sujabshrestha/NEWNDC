<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSiteVisitIdToValuationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valuation_details', function (Blueprint $table) {
            $table->unsignedBigInteger('site_visit_id')->nullable()->after('id');

            $table->foreign('site_visit_id')->references('id')->on('site_visits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valuation_details', function (Blueprint $table) {
            $table->dropForeign('site_visit_id');
            $table->dropColumn('site_visit_id');
        });
    }
}
