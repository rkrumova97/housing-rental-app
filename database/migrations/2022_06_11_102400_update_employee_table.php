<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('age')->nullable();
            $table->string('salary')->nullable();
            $table->date('start_date')->nullable();
            $table->string('vacation_days')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('working_days')->nullable();
            $table->string('grade')->nullable();
            $table->string('skill')->nullable();
            $table->string('show')->nullable();
            $table->string('jobId')->nullable();
            $table->string('jobName')->nullable();
            $table->string('iban')->nullable();
            $table->bigInteger('position_id')->nullable();
            $table->bigInteger('username_id')->nullable();
            $table->bigInteger('project_id')->nullable();
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->foreign('username_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
