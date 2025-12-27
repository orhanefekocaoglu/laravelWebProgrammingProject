<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use HasFactory;

    // Sadece ID'yi koruyoruz, diğer alanlar doldurulabilir
    protected $guarded = ['id'];

    /**
     * Bu öğün hangi müşteriye ait?
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Bu öğünde hangi yemek yendi?
     */
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}