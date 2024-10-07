<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefuellingStation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'station_code',
        'certificate_of_operations',
        'payment_period',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($refuellingStation) {
            $refuellingStation->user->delete();
        });
    }
}
