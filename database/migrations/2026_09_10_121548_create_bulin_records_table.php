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
        Schema::create('bulin_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classification_id')->constrained()->cascadeOnDelete();
            $table->json('form_data')->nullable()->comment('Placeholder for missing specific fields');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulin_records');
    }
};
