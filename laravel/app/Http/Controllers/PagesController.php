<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function contact() 
    {
    $baslik = "Bize Ulaşın"; // Veriyi hazırladık
    return view('contact', compact('baslik')); // Pakete koyup gönderdik
    }
}
