<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');   // Egzersiz adı (Koşu, Yüzme vb.)
            $table->string('type');   // Egzersiz türü (Kardiyo, Güç vb.)
            $table->string('unit');   // Birim (Dakika, Tekrar vb.)
            $table->integer('calor'); // Yakılan kalori
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};