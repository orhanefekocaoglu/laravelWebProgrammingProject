<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Sadece food tablosunu oluşturuyoruz
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name');   // Yemek adı (Elma, Tavuk vb.)
            $table->string('type');   // Türü (Meyve, Protein vb.)
            $table->string('unit');   // Birimi (Gram, Adet vb.)
            $table->integer('calor'); // Kalorisi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};