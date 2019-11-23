<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('availability');
            $table->decimal('salary_per_hour',7,2);
            $table->tinyInteger('status')->default(0)->comment('0 for pending, 1 for approved, 2 for blocked');
            $table->unsignedBigInteger('fk_job_post_id')->nullable();
            $table->unsignedBigInteger('fk_resume_id')->nullable();
            $table->unsignedBigInteger('fk_job_category_id');
            $table->unsignedBigInteger('fk_employer_id')->nullable();
            $table->unsignedBigInteger('fk_candidate_id')->nullable();

            $table->timestamps();
            $table->foreign('fk_job_category_id')
            ->references('id')
            ->on('job_categories');

            $table->foreign('fk_job_post_id')
            ->references('id')
            ->on('job_posts');
            $table->foreign('fk_resume_id')
            ->references('id')
            ->on('resumes');
            $table->foreign('fk_employer_id')
            ->references('id')
            ->on('employers');
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
        Schema::dropIfExists('job_seeker_requests');
    }
}
