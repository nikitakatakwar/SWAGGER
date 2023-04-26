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
        Schema::create('brand_settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('app_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('pdf_logo')->nullable();
            $table->string('theme_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('privacy_policy_url')->nullable();
            $table->string('terms_and_conditions_url')->nullable();
            $table->string('legal_disclaimer_url')->nullable();
            $table->string('knowledge_base_url')->nullable();
            $table->string('faq_url')->nullable();
            $table->string('service_docs_url')->nullable();
            $table->string('service_tutorials_url')->nullable();
            $table->string('product_api_url')->nullable();
            $table->string('api_code_github_repo_url')->nullable();
            $table->string('ask_a_question_url')->nullable();
            $table->string('ssh_key_generation_tutorial_url')->nullable();
            $table->string('coupon_code_terms_and_conditions_url')->nullable();
            $table->string('referral_terms_and_conditions_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedIn_url')->nullable();
            $table->string('object_storage_s3cmd_doc_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_settings');
    }
};
