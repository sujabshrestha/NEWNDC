<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuation_details', function (Blueprint $table) {
            $table->id();
            $table->string('road_size')->nullable();
            $table->string('river')->nullable();
            $table->string('hightension_line')->nullable();
            $table->enum('type_of_region',['Residential','Commercial','Agricultural','Others'])->nullable();
            $table->enum('motorable_access',['Yes','No'])->nullable();
            $table->enum('property_usage',['Residential','Commercial','Residential&Commercial','Others'])->nullable();
            $table->enum('type_of_access',['Earthen','Gravel','RCC','Black-Topped','Block-Paved','Goreto-Road','Keht(No Road)'])->nullable();
            $table->string('shape')->nullable();
            $table->string('facing')->nullable();
            $table->string('frontage')->nullable();
            $table->string('level_with_road')->nullable();
            $table->enum('property_fot_the_bank',['Recommended','Not-Recommended'])->nullable();
            $table->enum('river_near_by',['Yes','No'])->nullable();
            $table->enum('heritage_sites_near_by',['Yes','No'])->nullable();
            $table->enum('property_ownership_type',['Single','Joint','Company','Individual'])->nullable();
            $table->string('narrowest_part_of_land')->nullable();
            $table->string('access_in_the_blue_print')->nullable();
            $table->string('right_of_way')->nullable();
            $table->string('comments')->nullable();
            $table->enum('frame_structure',['Frame-Structure','Load-Bearing'])->nullable();
            $table->enum('any_collateral_fall',['Yes','No'])->nullable();
            $table->enum('valuation_for',['Vacant-Land','Land&Building','Readymade-House','Apartments/Duplex','Construction/Extension/Renovation'])->nullable();
            $table->enum('coloring',['Painted','Not-Painted'])->nullable();
            $table->string('florring_finishing')->nullable();
            $table->string('inner_wall_ceiling')->nullable();
            $table->string('boundary')->nullable();
            $table->string('no_of_floors')->nullable();
            $table->enum('type_of_land',['Planning','Khet','Flat','Slightly-Slope','Low-Land','Irregural-Shape'])->nullable();
            $table->enum('compound_wall',['Constructed','Not-Constructed'])->nullable();
            $table->longText('internal_remarks')->nullable();
            // From Technical Details
            $table->string('location_of_land')->nullable();
            $table->string('district')->nullable();
            $table->enum('vdc_municipality',['Rural-Municipality','Municipality','Sub-Metropolitan-City','Metropolitan-City'])->nullable();
            $table->string('address_of_land')->nullable();
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
        Schema::dropIfExists('valuation_details');
    }
}
