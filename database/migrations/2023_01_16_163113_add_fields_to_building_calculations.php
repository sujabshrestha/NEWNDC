<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBuildingCalculations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('building_calculations', function (Blueprint $table) {
            $table->unsignedDouble('deprication_amt')->nullable()->after('building_electric_work_percentage');
            $table->unsignedDouble('fair_market_val')->nullable()->after('building_electric_work_percentage');
            $table->unsignedDouble('distress_val')->nullable()->after('building_electric_work_percentage');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('building_calculations', function (Blueprint $table) {
            $table->dropColumn('deprication_amt');
            $table->dropColumn('fair_market_val');
            $table->dropColumn('distress_val');

        });
    }
}
