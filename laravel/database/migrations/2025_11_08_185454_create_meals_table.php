<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();

            // Foreign keys - Bu kısımlar tabloları birbirine bağlar
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->foreignId('food_id')->constrained()->onDelete('cascade');

            // Attributes
            $table->string('mealtime'); // Sabah, Öğle, Akşam gibi
            $table->boolean('like')->default(false); // Yemeği sevip sevmediği

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};