<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'organisation_id',
        'vehicle_id',
        'user_id',
        'national_id_no',
        'national_id_front_avatar',
        'national_id_behind_avatar',
        'status',
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driverLicense()
    {
        return $this->hasOne(DriversLicenses::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function license()
    {
        return $this->hasOne(DriversLicenses::class);
    }

    public function psvBadge()
    {
        return $this->hasOne(PSVBadge::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($driver) {
            $driver->user->delete();
            if ($driver->driverLicense) {
                $driver->driverLicense->delete();
            }
            if ($driver->vehicle) {
                $driver->vehicle->delete();
            }
            if ($driver->psvBadge) {
                $driver->psvBadge->delete();
            }
        });
    }
}