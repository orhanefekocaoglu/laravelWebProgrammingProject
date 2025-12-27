<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    // Sadece ID'yi koruyoruz, diğer alanlar toplu kaydedilebilir
    protected $guarded = ['id'];

    /**
     * Bu yiyeceğin dahil olduğu tüm öğünleri getirir.
     */
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}