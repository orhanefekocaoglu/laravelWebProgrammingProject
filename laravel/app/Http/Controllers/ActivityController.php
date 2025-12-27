<?php

namespace App\Http\Controllers;

use App\Models\Activity; // Bunu eklemeyi unutma!
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        // Veritabanındaki tüm aktiviteleri çek ve ekrana bas (Test için)
        $activities = Activity::all();
        dd($activities);
    }

    public function create()
    {
        // Test amaçlı sahte veri oluşturma
        Activity::create([
            "customer_id" => 1,
            "exercise_id" => 1,
            "repetition" => 20,
            "calor" => 150,
            "like" => true,
            "duration" => 10
        ]);

        return "Test aktivitesi başarıyla eklendi!";
    }
}