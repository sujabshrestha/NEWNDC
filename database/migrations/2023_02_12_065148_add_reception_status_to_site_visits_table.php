<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReceptionStatusToSiteVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_visits', function (Blueprint $table) {
            $table->enum('reception_status',['Completed','Incomplete'])->default('Incomplete')->after('ownership_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_visits', function (Blueprint $table) {
            $table->dropColumn('reception_status');
        });
    }
}
