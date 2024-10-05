<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripPricing extends Model
{
    use HasFactory;

    protected $table = 'trip_pricing';

    protected $fillable = [
        'ride_type_id',
        'route_id',
        'base_price',
        'price_per_km',
        'price_per_minute',
    ];

    public function rideType()
    {
        return $this->belongsTo(RideType::class, 'ride_type_id');
    }
    public function route()
    {
        return $this->belongsTo(Routes::class, 'route_id');
    }
}