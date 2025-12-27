<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exercise extends Model
{
    use HasFactory;

    // Güvenlik için sadece ID'yi koruyoruz, diğer alanlar toplu kaydedilebilir
    protected $guarded = ['id'];

    /**
     * Bu egzersize ait tüm aktiviteleri getirir.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}