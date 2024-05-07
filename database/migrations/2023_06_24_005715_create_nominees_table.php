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
        Schema::create('nominees', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('full_name')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender',['male','female','other'])->nullable();
            $table->string('passport_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->integer('percentage')->nullable();
            $table->string('relation')->nullable();
            $table->string('present_country')->nullable();
            $table->string('present_city')->nullable();
            $table->string('present_state')->nullable();
            $table->string('present_post_code')->nullable();
            $table->string('present_address')->nullable();
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
        Schema::dropIfExists('nominees');
    }
};
