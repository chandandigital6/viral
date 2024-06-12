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
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('f1_image')->nullable();
            $table->string('f1_msg')->nullable();
            $table->string('f2_image')->nullable();
            $table->string('f2_msg')->nullable();
            $table->string('f3_image')->nullable();
            $table->string('f3_msg')->nullable();
            $table->string('f4_image')->nullable();
            $table->string('f4_msg')->nullable();
            $table->string('f5_image')->nullable();
            $table->string('f5_msg')->nullable();
            $table->string('title_1')->nullable();
            $table->string('heading')->nullable();
            $table->string('short_description')->nullable();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_details');
    }
};
