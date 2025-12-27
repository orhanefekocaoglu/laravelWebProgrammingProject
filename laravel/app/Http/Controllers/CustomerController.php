<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // 1. Önce ID'si 1 olan müşteriyi bulup ismini güncelleme testi
        $firstCustomer = Customer::find(1);
        if ($firstCustomer) {
            $firstCustomer->update([
                "name" => "John"
            ]);
        }

        // 2. Tüm müşterileri çek ve ekrana dök (Hata ayıklama için)
        return dd(Customer::all());
    }

    public function create()
    {
        // Test amaçlı manuel müşteri oluşturma
        Customer::create([
            "name" => "Serdar",
            "surname" => "Balkı",
            "birthYear" => 2004,
            "gender" => "Male",
        ]);

        Customer::create([
            "name" => "Jane",
            "surname" => "Doe",
            "birthYear" => 1999,
            "gender" => "Female",
        ]);

        return "Müşteriler başarıyla oluşturuldu!";
    }

    public function edit(Customer $customer)
    {
        // Route üzerinden gelen müşterinin soyadını güncelleme testi
        $customer->update([
            "surname" => "abc"
        ]);

        return dd(Customer::all());
    }
}