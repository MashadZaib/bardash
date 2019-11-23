<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('order_status')->default(0)->comment('0 for pending, 1 for in_process, 2 for completed, 3 for canceled');
            $table->unsignedBigInteger('fk_shift_summary');
            $table->unsignedBigInteger('fk_pay_summary');
            $table->unsignedBigInteger('fk_candidate_id');
            $table->unsignedBigInteger('fk_employer_id');
            $table->foreign('fk_shift_summary')
            ->references('id')
            ->on('shift_summaries');
            $table->foreign('fk_pay_summary')
            ->references('id')
            ->on('pay_summaries');
            $table->foreign('fk_candidate_id')
            ->references('id')
            ->on('candidates');
            $table->foreign('fk_employer_id')
            ->references('id')
            ->on('employers');
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
        Schema::dropIfExists('orders');
    }
}
