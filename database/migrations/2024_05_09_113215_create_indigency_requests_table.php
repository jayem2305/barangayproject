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
        Schema::create('indigency_requests', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('reg_num');
            $table->foreign('reg_num')->references('reg_number')->on('residents')->onDelete('cascade');
            $table->string('indigency')->default('Barangay Indigency');
            $table->string('voters');
            $table->string('name');
            $table->string('copy');
            $table->string('requirements');
            $table->string('purpose');
            $table->string('otherpurpose')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indigency_requests');
    }
};
