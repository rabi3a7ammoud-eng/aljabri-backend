<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('review_setting_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('review_setting_id')->constrained()->cascadeOnDelete();
            $table->string('language_code', 5);
            $table->string('title');
            $table->text('description')->nullable();
            $table->unique(['review_setting_id', 'language_code']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('review_setting_translations');
    }
};