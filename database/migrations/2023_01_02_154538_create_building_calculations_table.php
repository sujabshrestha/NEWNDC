<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_calculations', function (Blueprint $table) {
            $table->id();
            $table->enum('floor',['Semi_Basement', 'Basement', 'Ground_Floor', 'First_Floor', 'Second Floor',
            'Third_Floor','Fourth_Floor', 'Fifth_Floor', 'Sixth_Floor', 'Seventh_Floor', 'Top_Floor']);
            $table->unsignedBigInteger('site_visit_id');
            $table->string('buildingarea_sqm');
            $table->string('building_age');
            $table->string('building_depreciation_percentage');
            $table->string('building_sanitary_plumbing_percentage');
            $table->string('building_electric_work_percentage');
            $table->string('building_amount');
            $table->string('building_totalamount');
            $table->string('building_rate');




            $table->foreign('site_visit_id')->references('id')->on('site_visits')->onDelete('cascade');



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
        Schema::dropIfExists('building_calculations');
    }
}
