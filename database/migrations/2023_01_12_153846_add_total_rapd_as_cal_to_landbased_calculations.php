<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalRapdAsCalToLandbasedCalculations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('landbased_calculations', function (Blueprint $table) {
            $table->string('total_rapd_as_cal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('landbased_calculations', function (Blueprint $table) {
            $table->dropColumn('total_rapd_as_cal');
        });
    }
}
