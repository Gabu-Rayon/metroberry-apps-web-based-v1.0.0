<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NTSAInspectionCertificate extends Model
{
    use HasFactory;

    protected $table = 'ntsa_inspection_certificates';

    protected $fillable = [
        'vehicle_id',
        'creator_id',
        'ntsa_inspection_certificate_no',
        'ntsa_inspection_certificate_date_of_issue',
        'ntsa_inspection_certificate_date_of_expiry',
        'ntsa_inspection_certificate_avatar',
        'verified',
        'cost'
    ];

    protected $with = ['vehicle'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
