<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earns', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //points
            $table->decimal('earn_points', 8, 2);
            $table->String('earn_title');
            // payout
            $table->Decimal('earn_payout', 8, 2);
            // status
            $table->Integer('earn_status');
            // offer_id
            $table->unsignedBigInteger('offer_id');
            //offer_name
            $table->String('offer_name');
            // transaction_id
            $table->String('transaction_id');
            // session_ip
            $table->String('session_ip');
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
        Schema::dropIfExists('earns');
    }
}
