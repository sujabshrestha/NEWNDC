<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBuildingCalFieldsToValuationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valuation_details', function (Blueprint $table) {
            $table->unsignedDouble('totalBuildingAreaSqF')->nullable()->after('road_size');
            $table->unsignedDouble('totalBuildingAmount')->nullable()->after('road_size');
            $table->unsignedDouble('totalNetBuildingAmount')->nullable()->after('road_size');
            $table->unsignedDouble('totalBuildingDepriciation')->nullable()->after('road_size');
            $table->unsignedDouble('totalBuildingFairMarketValue')->nullable()->after('road_size');
            $table->unsignedDouble('totalBuildingDistressValue')->nullable()->after('road_size');

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
            $table->dropColumn('totalBuildingAreaSqF');
            $table->dropColumn('totalBuildingAmount');
            $table->dropColumn('totalNetBuildingAmount');
            $table->dropColumn('totalBuildingDepriciation');
            $table->dropColumn('totalBuildingFairMarketValue');
            $table->dropColumn('totalBuildingDistressValue');
        });
    }
}
