<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToValuationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valuation_details', function (Blueprint $table) {
            $table->string('total_rapd_as_lalpurja')->nullable()->after('road_size');
            $table->unsignedDouble('total_sqm_as_lalpurja')->nullable()->after('road_size');
            $table->unsignedDouble('total_sqf_as_lalpurja')->nullable()->after('road_size');
            $table->unsignedDouble('total_anna_as_lalpurja')->nullable()->after('road_size');
            $table->string('total_rapd_as_measurement')->nullable()->after('road_size');
            $table->unsignedDouble('total_sqm_as_measurement')->nullable()->after('road_size');
            $table->unsignedDouble('total_sqf_as_measurement')->nullable()->after('road_size');
            $table->unsignedDouble('total_anna_as_measurement')->nullable()->after('road_size');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valuation_details', function (Blueprint $table) {
            $table->dropColumn('total_rapd_as_lalpurja');
            $table->dropColumn('total_sqm_as_lalpurja');
            $table->dropColumn('total_sqf_as_lalpurja');
            $table->dropColumn('total_anna_as_lalpurja');
            $table->dropColumn('total_rapd_as_measurement');
            $table->dropColumn('total_sqm_as_measurement');
            $table->dropColumn('total_sqf_as_measurement');
            $table->dropColumn('total_anna_as_measurement');

            
        });
    }
}
