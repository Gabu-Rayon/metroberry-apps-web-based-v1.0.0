<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PSVBadge extends Model
{
    use HasFactory;

    protected $table = 'psv_badges';

    protected $fillable = [
        'driver_id',
        'psv_badge_no',
        'psv_badge_date_of_issue',
        'psv_badge_date_of_expiry',
        'psv_badge_avatar',
        'verified',
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
