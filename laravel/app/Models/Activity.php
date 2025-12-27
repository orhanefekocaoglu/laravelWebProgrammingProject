<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    // Sadece ID'yi korumaya alıyoruz, diğer alanlar doldurulabilir
    protected $guarded = ['id'];

    /**
     * Bu aktivite hangi egzersize ait? (Koşu mu, şınav mı?)
     */
    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    /**
     * Bu aktiviteyi hangi müşteri yaptı?
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}