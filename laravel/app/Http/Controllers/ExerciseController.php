<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        // Veritabanındaki tüm egzersizleri çek ve ekrana dök (Test için)
        return dd(Exercise::all());
    }

    public function create()
    {
        // Test amaçlı manuel egzersiz verileri oluşturma
        Exercise::create([
            "name" => "Push Ups",
            "type" => "Strength",
            "unit" => "repetition",
            "calor" => 50
        ]);

        Exercise::create([
            "name" => "Running",
            "type" => "Cardio",
            "unit" => "minute",
            "calor" => 200
        ]);

        return "Egzersizler başarıyla sisteme eklendi!";
    }
}