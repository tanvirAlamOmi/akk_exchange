<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id')->nullable();
            $table->boolean('is_joint')->nullable()->default(false);
            $table->string('nid')->nullable()->unique();
            $table->string('full_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender',['male','female','other'])->nullable();
            $table->string('occupation')->nullable();
            $table->string('tin')->nullable()->unique();
            $table->boolean('citizen_of_bangladesh')->nullable()->default(true);
            $table->string('present_country')->nullable();
            $table->string('present_city')->nullable();
            $table->string('present_state')->nullable();
            $table->string('present_post_code')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_country')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_post_code')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('passport_no')->nullable()->unique();
            $table->string('passport_issue_place')->nullable();
            $table->date('passport_issue_date')->nullable();
            $table->date('passport_expiry_date')->nullable();
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('nid_front_image')->nullable();
            $table->string('nid_back_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
