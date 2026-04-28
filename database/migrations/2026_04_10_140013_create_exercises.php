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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            
            // Nome dell'esercizio
            $table->string('name');
            
            // Descrizione 
            $table->text('description')->nullable();
            
            // Gruppo muscolare 
            $table->foreignId('muscle_group_id')->constrained('muscle_groups');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
