<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RideType extends Model
{
    use HasFactory;

    protected $table = 'ride_type';

    protected $fillable = [
        'type',
        'description',
        'status',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function tripPricings()
    {
        return $this->hasMany(TripPricing::class, 'ride_type_id');
    }
}