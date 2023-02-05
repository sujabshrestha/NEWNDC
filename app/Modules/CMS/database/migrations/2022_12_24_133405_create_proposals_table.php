<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['Pending', 'Completed'])->default('Pending');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('banker_name');
            $table->string('banker_contact');
            $table->unsignedBigInteger('site_engineer')->nullable();
            $table->unsignedBigInteger('engineer_head')->nullable();
            $table->foreign('site_engineer')->references('id')->on('users')->onDelete('set null');
            $table->foreign('engineer_head')->references('id')->on('users')->onDelete('set null');
            $table->foreign('client_id')->references('id')->on('users')->onDelete('set null');
            $table->text('remarks');
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
        Schema::dropIfExists('proposals');
    }
}
