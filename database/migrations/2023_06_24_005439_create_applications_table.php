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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('mobile_no')->nullable()->unique();
            $table->enum('bo_type',['individual','joint'])->nullable();
            $table->enum('bo_option',['new_bo','link_bo'])->nullable();
            $table->enum('residency',['rb','nrb'])->nullable();
            $table->enum('stage',['intro','basic','bank','nominee','completed'])->nullable()->default('intro');
            $table->boolean('status')->nullable()->default(false);
            $table->text('note')->nullable();
            $table->timestamp('note_read_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
