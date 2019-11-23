<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('start_shift');
            $table->string('clock_out');
            $table->string('clock_in');
            $table->string('end_shift');
            $table->integer('total_hours');
        
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
        Schema::dropIfExists('shift_summaries');
    }
}
