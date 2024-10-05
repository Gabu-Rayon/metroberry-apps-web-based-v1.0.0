<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRefueling extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'refuelling_station_id',
        'creator_id',
        'refuelling_date',
        'refuelling_time',
        'refuelling_volume',
        'refuelling_cost',
        'attendant_name',
        'attendant_phone',
        'status'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function refuellingStation()
    {
        return $this->belongsTo(RefuellingStation::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
