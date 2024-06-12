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
        Schema::create('service_videos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('title')->nullable();
            $table->text('sort_msg')->nullable();
            $table->string('f1_msg')->nullable();
            $table->string('f1_icon')->nullable();
            $table->string('f2_msg')->nullable();
            $table->string('f2_icon')->nullable();
            $table->string('f3_msg')->nullable();
            $table->string('f3_icon')->nullable();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_videos');
    }
};
