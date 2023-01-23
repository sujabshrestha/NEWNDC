<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deductions', function (Blueprint $table) {
            $table->string('total_rapd_as_road')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqm_as_road')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_anna_as_road')->nullable()->after('deductionForIrregularShapeSloppyLand');
           
            $table->string('total_rapd_as_land_development')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqm_as_land_development')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqf_as_land_development')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_anna_as_land_development')->nullable()->after('deductionForIrregularShapeSloppyLand');

            $table->string('total_rapd_as_high_tension_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqm_as_high_tension_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_anna_as_high_tension_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');

            $table->string('total_rapd_as_low_land_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqm_as_low_land_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_anna_as_low_land_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            
            $table->string('total_rapd_as_river_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqm_as_river_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_anna_as_river_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');

            $table->string('total_rapd_as_boundry_correction_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqm_as_boundry_correction_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqf_as_boundry_correction_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_anna_as_boundry_correction_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');

            $table->string('total_rapd_as_irregular_shape_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqm_as_irregular_shape_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_sqf_as_irregular_shape_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');
            $table->unsignedDouble('total_anna_as_irregular_shape_deduction')->nullable()->after('deductionForIrregularShapeSloppyLand');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deductions', function (Blueprint $table) {
            $table->dropColumn('total_rapd_as_road');
            $table->dropColumn('total_sqm_as_road');
            $table->dropColumn('total_anna_as_road');
          
            $table->dropColumn('total_rapd_as_land_development');
            $table->dropColumn('total_sqm_as_land_development');
            $table->dropColumn('total_sqf_as_land_development');
            $table->dropColumn('total_anna_as_land_development');

            $table->dropColumn('total_rapd_as_high_tension_deduction');
            $table->dropColumn('total_sqm_as_high_tension_deduction');
            $table->dropColumn('total_anna_as_high_tension_deduction');

            $table->dropColumn('total_rapd_as_low_land_deduction');
            $table->dropColumn('total_sqm_as_low_land_deduction');
            $table->dropColumn('total_anna_as_low_land_deduction');
            
            $table->dropColumn('total_rapd_as_river_deduction');
            $table->dropColumn('total_sqm_as_river_deduction');
            $table->dropColumn('total_anna_as_river_deduction');

            $table->dropColumn('total_rapd_as_boundry_correction_deduction');
            $table->dropColumn('total_sqm_as_boundry_correction_deduction');
            $table->dropColumn('total_sqf_as_boundry_correction_deduction');
            $table->dropColumn('total_anna_as_boundry_correction_deduction');

            $table->dropColumn('total_rapd_as_irregular_shape_deduction');
            $table->dropColumn('total_sqm_as_irregular_shape_deduction');
            $table->dropColumn('total_sqf_as_irregular_shape_deduction');
            $table->dropColumn('total_anna_as_irregular_shape_deduction');
        });
    }
}
