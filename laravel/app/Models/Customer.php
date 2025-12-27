<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    // ID dışındaki tüm alanların toplu kaydedilmesine izin veriyoruz
    protected $guarded = ['id'];

    /**
     * Müşterinin birçok öğünü (yemeği) olabilir.
     */
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }

    /**
     * Müşterinin birçok spor aktivitesi olabilir.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}