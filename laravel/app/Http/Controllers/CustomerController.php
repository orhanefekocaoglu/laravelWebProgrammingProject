<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // 1. Müşterileri Listeleme
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // 2. SADECE FORMU GÖSTERME (Form sayfasını açar)
    public function create()
    {
        return view('customers.create');
    }

    // 3. FORMDAN GELENİ KAYDETME (Butona basınca çalışır)
public function store(Request $request)
{
    // 1. Veriyi kaydet
    \App\Models\Customer::create([
        'name'      => $request->name,
        'surname'   => $request->surname,
        'birthYear' => (int)$request->birthYear, // Sayı olduğundan emin olalım
        'gender'    => $request->gender,
    ]);

    // 2. Doğrudan listeye gönder
    return redirect()->route('customers.index');
}

    public function edit(Customer $customer)
    {
        $customer->update(["surname" => "abc"]);
        return redirect()->route('customers.index');
    }
}