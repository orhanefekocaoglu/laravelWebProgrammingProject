<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exercise;
use App\Models\Customer;

class Activity extends Model
{
    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}