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
        Schema::create('pus_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classification_id')->constrained()->cascadeOnDelete();
            $table->integer('wife_age');
            $table->integer('number_of_children');
            $table->boolean('wants_children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pus_records');
    }
};
