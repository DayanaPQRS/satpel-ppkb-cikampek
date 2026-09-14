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
        Schema::create('pregnancy_examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bumil_record_id')->constrained()->cascadeOnDelete();
            $table->date('examination_date');
            $table->decimal('weight', 5, 2);
            $table->string('blood_pressure');
            $table->decimal('fundal_height', 5, 2)->nullable();
            $table->integer('fetal_heart_rate')->nullable();
            $table->foreignId('kader_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregnancy_examinations');
    }
};
