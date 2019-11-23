<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('job_title');
            $table->string('state');
            $table->string('from_date');
            $table->string('to_date');
            $table->unsignedBigInteger('fk_candidate_id');
            $table->timestamps();
            $table->foreign('fk_candidate_id')
            ->references('id')
            ->on('candidates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_histories');
    }
}
