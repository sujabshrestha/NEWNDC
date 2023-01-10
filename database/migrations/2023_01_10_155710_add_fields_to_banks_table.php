<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banks', function (Blueprint $table) {
            $table->float('commercial_rate')->nullable();
            $table->float('fair_market_rate')->nullable();
            $table->float('governmant_rate')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banks', function (Blueprint $table) {
            $table->dropColumn('commercial_rate');
            $table->dropColumn('fair_market_rate');
            $table->dropColumn('governmant_rate');

        });
    }
}
