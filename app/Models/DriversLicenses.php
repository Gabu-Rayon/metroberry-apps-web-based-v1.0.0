<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriversLicenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'driving_license_no',
        'driving_license_date_of_issue',
        'driving_license_date_of_expiry',
        'driving_license_avatar_front',
        'driving_license_avatar_back',
        'verified',
    ];

    public function driver(){
        return $this->hasOne(Driver::class, 'id', 'driver_id');
    }
}
