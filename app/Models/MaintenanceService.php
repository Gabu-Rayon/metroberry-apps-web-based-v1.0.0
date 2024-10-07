<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceService extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'creator_id',
        'service_type_id',
        'service_category_id',
        'service_date',
        'service_cost',
        'service_description',
        'service_status',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceTypeCategory::class);
    }
}
