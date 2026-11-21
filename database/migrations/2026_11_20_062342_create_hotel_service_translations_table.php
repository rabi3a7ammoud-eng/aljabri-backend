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
        Schema::create('hotel_service_translations', function (Blueprint $table) {
            $table->id();
           $table->foreignId('hotel_service_id')->constrained()->cascadeOnDelete();
$table->string('language_code', 5);
$table->string('name');
$table->text('description')->nullable();
$table->unique(['hotel_service_id', 'language_code']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_service_translations');
    }
};
