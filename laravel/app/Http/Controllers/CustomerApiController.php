<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerApiController extends Controller
{
    /**
     * Return list of customers as JSON
     */
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    /**
     * Store a new customer and return JSON response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthYear' => 'required|integer|min:1900|max:'.(date('Y')),
            'gender' => 'required|string|max:10',
        ]);

        $customer = Customer::create($data);

        return response()->json($customer, 201);
    }

    /**
     * Display the specified customer as JSON
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Update the specified customer
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified customer
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
