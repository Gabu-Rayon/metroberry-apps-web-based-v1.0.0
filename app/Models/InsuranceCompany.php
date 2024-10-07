<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    use HasFactory;
    protected $table = "insurance_companies";

    protected $fillable = [
        'name',
        'email',
        'address',
        'website',
        'created_by',
        'status'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
