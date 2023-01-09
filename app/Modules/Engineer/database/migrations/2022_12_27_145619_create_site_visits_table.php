    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_visits', function (Blueprint $table) {
            $table->id();
            $table->string('registration_id')->unique();
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('set null');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('set null');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null');
            $table->string('market_rate')->nullable();
            $table->string('owner_name')->nullable();

            $table->string('bm_name')->nullable();
            $table->string('bm_contact')->nullable();
            $table->string('rm_name')->nullable();
            $table->string('rm_contact')->nullable();

            $table->string('government_rate')->nullable();
            $table->string('road_size')->nullable();
            $table->unsignedBigInteger('ward_no')->nullable();
            $table->string('compound_wall')->nullable();
            $table->enum('valuation_type', ['Land', 'Land_Building', 'Apartment']);
            $table->enum('type_of_road', ['Earthern', 'RCC', 'Gravel', 'Goreto','Dead_End', 'Throughtout']);
            $table->enum('type_of_land', ['Planning','Flat','Khet','Slightly_Slope','Low_Land']);
            $table->enum('category_of_property', ['Residential','Commercial','Commercial_Residential','Other']);
            $table->json('valuation_rate')->nullable();
            $table->json('estimate_rate')->nullable();
            // $table->json('valuation_rate')->nullable();
            $table->text('remarks')->nullable();

            $table->unsignedBigInteger('file_no')->nullable();
            $table->unsignedBigInteger('proposal_id')->nullable();
            $table->unsignedBigInteger('site_engineer_id')->nullable();
            $table->foreign('proposal_id')->references('id')->on('proposals')->onDelete('set null');
            $table->foreign('site_engineer_id')->references('id')->on('users')->onDelete('set null');


            $table->unsignedBigInteger('valuation_assignment_no')->nullable();
            $table->date('preparation_date')->nullable();
            $table->date('ownership_date')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('site_visits');
    }
}
