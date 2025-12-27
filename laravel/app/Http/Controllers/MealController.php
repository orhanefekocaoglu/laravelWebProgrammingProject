<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        // Kayıtlı tüm öğünleri listele
        return dd(Meal::all());
    }

    public function create()
    {
        // Test verisi oluşturma: 1 nolu müşteri için öğün kayıtları
        Meal::create([
            "customer_id" => 1,
            "food_id" => 1,
            "mealtime" => "Breakfast",
            "like" => true
        ]);

        Meal::create([
            "customer_id" => 1,
            "food_id" => 2,
            "mealtime" => "Dinner",
            "like" => false
        ]);

        return "Öğün kayıtları başarıyla oluşturuldu!";
    }
}