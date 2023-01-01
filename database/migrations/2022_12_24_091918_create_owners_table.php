<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{

    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('mohi_name')->nullable();
            $table->string('father_name');
            $table->string('grand_father_name')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('father_in_law_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->dateTime('date_of_issue')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->dateTime('pan_date_of_issue')->nullable();
            $table->string('pan_place_of_issue')->nullable();
            $table->string('share_holders')->nullable();
            $table->string('relation')->nullable();
            $table->string('proposed_owner_name')->nullable();

            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->longText('remarks')->nullable();

            $table->unsignedBigInteger('client_id');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
