<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSiteVisits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_visits', function (Blueprint $table) {
            $table->unsignedDouble('construction_estimate_value')->nullable()->after('estimate_rate');
            $table->unsignedDouble('area_as_per_construction')->nullable()->after('estimate_rate');
            $table->string('contruction_approval_date')->nullable()->after('estimate_rate');
            $table->string('year_construction_complite')->nullable()->after('estimate_rate');
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
            $table->dropColumn('construction_estimate_value');
            $table->dropColumn('area_as_per_construction');
            $table->dropColumn('contruction_approval_date');
            $table->dropColumn('year_construction_complite');

        });
    }
}
