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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('heading')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('fe_1')->nullable();
            $table->string('fe_2')->nullable();
            $table->string('fe_3')->nullable();
            $table->text('founded')->nullable();
            $table->string('founded_image')->nullable();
            $table->text('g_success')->nullable();
            $table->string('g_success_image')->nullable();
            $table->text('founded_data_office')->nullable();
            $table->string('founded_data_office_image')->nullable();
            $table->text('international_award')->nullable();
            $table->string('international_award_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
