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
        Schema::create('s_e_o_s', function (Blueprint $table) {
            $table->id();
            $table->enum('page', ['about-us', 'blog', 'career', 'client-reviews', 'contact-us', 'content-marketing', 'content-writing', 'conversion-rate-optimization', 'custom-website-design', 'email-marketing-services', 'index', 'jobs', 'local-seo-services', 'meet-talent', 'online-reputation-management', 'ppc-management', 'privacy-policy', 'search-engine-optimization', 'single', 'social-media-brand-management', 'social-media-management', 'social-media-marketing', 'social-media-paid-advertisement', 'terms-of-service', 'video-production', 'youtube-channel-monetization', 'youtube-video-marketing'])->default('index');
            $table->string('property');
            $table->string('name');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_e_o_s');
    }
};
