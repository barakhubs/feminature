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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('location')->nullable();
            $table->string('salary')->nullable();
            $table->foreignId('job_category_id')->constrained('job_categories')->onDelete('cascade');
            $table->enum('job_type', ['full-time', 'part-time', 'contract', 'internship', 'volunteer'])->default('full-time');
            $table->string('deadline');
            $table->enum('status', ['draft', 'published', 'closed'])->default('draft');
            $table->string('document_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
