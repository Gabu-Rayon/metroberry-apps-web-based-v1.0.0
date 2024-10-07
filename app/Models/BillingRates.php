<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingRates extends Model
{
    protected $casts = [
        'rate_by_car_class' => 'array',
    ];

    protected $attributes = [
        'rate_by_car_class' => '{"A":500,"B":700,"C":1000}',
    ];
}
