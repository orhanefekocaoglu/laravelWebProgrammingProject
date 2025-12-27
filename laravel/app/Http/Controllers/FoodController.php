<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        // Tüm yemekleri listele ve ekrana bas
        return dd(Food::all());
    }

    public function create()
    {
        // Test amaçlı yiyecek verileri ekleme
        Food::create([
            "name" => "Chicken Breast",
            "type" => "Protein",
            "unit" => "gram",
            "calor" => 165
        ]);

        Food::create([
            "name" => "Banana",
            "type" => "Carb",
            "unit" => "piece",
            "calor" => 89
        ]);

        return "Yiyecekler başarıyla eklendi!";
    }
}