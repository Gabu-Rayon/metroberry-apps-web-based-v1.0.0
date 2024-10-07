<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRepair extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'creator_id',
        'part_id',
        'repair_date',
        'repair_type',
        'repair_cost',
        'repair_description',
        'repair_status',
        'amount',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function part()
    {
        return $this->belongsTo(VehiclePart::class);
    }
}
