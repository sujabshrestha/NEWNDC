<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtrafieldsToSiteVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_visits', function (Blueprint $table) {
            $table->enum('type_of_road_end', ['Dead_End', 'Throughout'])->nullable()->after('remarks');
            $table->boolean('boundary')->nullable()->after('remarks');
            $table->unsignedFloat('longitude')->nullable()->after('remarks');
            $table->unsignedFloat('latitude')->nullable()->after('remarks');
            $table->string('right_of_row')->nullable()->after('remarks');
            $table->string('deduct_on_road')->nullable()->after('remarks');
            $table->string('deduct_on_land')->nullable()->after('remarks');
            $table->string('high_tension_line')->nullable()->after('remarks');
            $table->string('boundary_correction')->nullable()->after('remarks');
            $table->string('kulo_river')->nullable()->after('remarks');
            $table->string('land_development')->nullable()->after('remarks');
            // $table->string('land_development')->nullable()->after('remarks');
            $table->boolean('land_revenue')->nullable()->after('remarks');
            $table->boolean('lalpurja')->nullable()->after('remarks');
            $table->boolean('napi_naki')->nullable()->after('remarks');
            $table->boolean('rajinima_likhit')->nullable()->after('remarks');
            $table->boolean('citizenship_owner')->nullable()->after('remarks');
            $table->boolean('citizenship_client')->nullable()->after('remarks');
            $table->boolean('org_char_killa_letter')->nullable()->after('remarks');
            $table->boolean('approved_drawing_building')->nullable()->after('remarks');
            $table->boolean('ilajat_building')->nullable()->after('remarks');
            $table->boolean('sampan_building')->nullable()->after('remarks');
            $table->boolean('company_registration_number')->nullable()->after('remarks');
            $table->boolean('citizenship_shareholder')->nullable()->after('remarks');
            $table->unsignedBigInteger('site_plan_image')->nullable()->after('remarks');
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
            $table->dropColumn('type_of_road_end');
            $table->dropColumn('boundary');
            $table->dropColumn('compound_wall');
            $table->dropColumn('longitude');
            $table->dropColumn('latitude');
            $table->dropColumn('right_or_row');
            $table->dropColumn('deduct_on_land');
            $table->dropColumn('high_tension_line');
            $table->dropColumn('boundary_correction');
            $table->dropColumn('kulo_river');
            $table->dropColumn('land_development');
            $table->dropColumn('lalpurja');
            $table->dropColumn('napi_naki');
            $table->dropColumn('org_char_killa_letter');
            $table->dropColumn('sampan_building');
            $table->dropColumn('ilajat_building');
            $table->dropColumn('citizenship_client');
            $table->dropColumn('approved_drawing_building');
            $table->dropColumn('company_registration_number');
            $table->dropColumn('citizenship_shareholder');
            $table->dropColumn('site_plan_image');
        });
    }
}
