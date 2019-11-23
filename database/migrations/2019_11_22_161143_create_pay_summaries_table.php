<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaySummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('hourly_rate',5,2);
            $table->integer('hours_worked');
            $table->decimal('total_payment',5,2);
            $table->decimal('service_fee',5,2)->default(0);
            $table->string('service_platform')->nullable();
            $table->decimal('total_payout',7,2);
            //tax
        
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
        Schema::dropIfExists('pay_summaries');
    }
}
