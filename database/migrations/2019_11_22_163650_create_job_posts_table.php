<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hours_of_operation');
            $table->string('uniform_req_url1')->nullable();
            $table->string('uniform_req_ur2')->nullable();
            $table->text('brief_job_description');
            $table->text('educational_requirements')->nullable();
            $table->text('skills_required');
            $table->string('environmental_type');
            $table->string('pay_range');
            $table->unsignedBigInteger('fk_job_cat_id');
            $table->foreign('fk_job_cat_id')
            ->references('id')
            ->on('job_categories');
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
        Schema::dropIfExists('job_posts');
    }
}
