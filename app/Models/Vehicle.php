<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'driver_id',
        'organisation_id',
        'model',
        'make',
        'year',
        'plate_number',
        'color',
        'seats',
        'class',
        'fuel_type',
        'engine_size',
        'avatar',
        'status',
    ];



    

    protected $hidden = [
        'organisation_id',
        'created_at',
        'updated_at',
    ];



    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function scheduledTrips()
    {
        return $this->trips()->where('status', 'scheduled');
    }
    
    public function assignedTrips()
    {
        return $this->trips()->where('status', 'assigned');
    }

    public function isOccupied()
    {
        $seatsRange = null;

        if ($this->class == 'A') {
            $seatsRange = range(1, 4);
        } else if ($this->class == 'B') {
            $seatsRange = range(5, 6);
        } else if ($this->class == 'C') {
            $seatsRange = range(7, 14);
        }

        $trips = $this->trips()->where('status', 'scheduled')->where('trip_date', '>=', now())->get();

        if ($trips->count() >= count($seatsRange)) {
            return true;
        } else {
            return false;
        }
    }

    public function services()
    {
        return $this->hasMany(MaintenanceService::class);
    }

    public function repairs()
    {
        return $this->hasMany(MaintenanceRepair::class);
    }

    public function insurance()
    {
        return $this->hasOne(VehicleInsurance::class);
    }

    public function refuellings()
    {
        return $this->hasMany(VehicleRefueling::class);
    }

    public function inspectionCertificates()
    {
        return $this->hasMany(NTSAInspectionCertificate::class);
    }
}