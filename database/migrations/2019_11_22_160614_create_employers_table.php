<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->string('owner_name');
            $table->string('email');
            $table->string('phone_number');
            $table->text('address');
            $table->string('owner_photo_url');
            $table->string('business_logo_url');
            $table->tinyInteger('profile_status')->default(0)->comment('0 for unapproved, 1 for approved, 2 for blocked');
            $table->unsignedBigInteger('fk_business_type_id');

            $table->foreign('fk_business_type_id')
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
        Schema::dropIfExists('employers');
    }
}
