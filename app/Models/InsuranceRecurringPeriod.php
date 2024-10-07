<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceRecurringPeriod extends Model
{
    use HasFactory;

    protected $table = "insurance_recurring_periods";

    protected $fillable = [
        'name',
        'description',
        'status',
        'created_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}