<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // 1. Müşterileri Listeleme
public function index()
{
    // El yapımı listeyi sildik, gerçek veritabanını çağırdık
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
    // Bize o müşterinin bilgilerinin olduğu bir sayfa aç (formu göster)
    return view('customers.edit', compact('customer'));
}
    
    // Tek bir müşteriyi göster
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }
public function destroy(Customer $customer)
{
    $customer->delete(); // Seçtiğin müşteriyi siler
    return redirect()->route('customers.index'); // Listeye geri döner
}

    // Güncelleme işlemi
    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthYear' => 'required|integer|min:1900|max:'.(date('Y')),
            'gender' => 'required|string|max:10',
        ]);

        $customer->update($data);

        return redirect()->route('customers.index');
    }
}