<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('dob');
            $table->string('email');
            $table->text('password');
            $table->string('phone');
            $table->string('state');
            $table->string('zip_code');
            $table->string('photo_url');
            $table->tinyInteger('profile_status')->default(0)->comment('0 for unapproved, 1 for approved, 2 for blocked');
            $table->unsignedBigInteger('fk_resume_id')->nullable();

            $table->foreign('fk_resume_id')
                ->references('id')
                ->on('resumes');
                
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
        Schema::dropIfExists('candidates');
    }
}
