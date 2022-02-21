<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('giveaway_id');
            $table->unsignedBigInteger('user_id');
            // points
            $table->unsignedBigInteger('points');
            // status
            $table->Integer('status')->default(0);

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
        Schema::dropIfExists('giveaway_histories');
    }
}
