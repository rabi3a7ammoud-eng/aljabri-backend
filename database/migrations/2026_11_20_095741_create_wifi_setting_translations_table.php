<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wifi_setting_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wifi_setting_id')->constrained()->cascadeOnDelete();
            $table->string('language_code', 5);
            $table->string('network_name');
            $table->text('instructions')->nullable();
            $table->unique(['wifi_setting_id', 'language_code']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wifi_setting_translations');
    }
};