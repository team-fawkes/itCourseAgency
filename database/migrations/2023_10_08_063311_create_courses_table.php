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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');

            $table->string('tagline')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('online_fee')->nullable();
            $table->string('offline_fee')->nullable();
            $table->string('duration')->nullable();
            $table->string('lectures')->nullable();
            $table->string('projects')->nullable();
            $table->text('short_description')->nullable();
            $table->text('overview')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('gallery')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
