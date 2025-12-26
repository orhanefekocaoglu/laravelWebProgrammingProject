<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            // Foreign keys - Müşteri ve Egzersiz tablolarına bağlar
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->foreignId('exercise_id')->constrained()->onDelete('cascade');

            // Attributes
            $table->integer('repetition'); // Tekrar sayısı
            $table->integer('calor');      // Yakılan kalori
            $table->boolean('like')->default(false); // Sevdi mi?
            $table->integer('duration');   // Süre (dakika/saniye)

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};