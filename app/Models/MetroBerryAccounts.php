<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetroBerryAccounts extends Model
{
     use HasFactory;

    protected $table = "accounts";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'holder_name',
        'bank_name',
        'account_number',
        'opening_balance',
        'contact_number',
        'bank_address',
        'created_by',
    ];

    /**
     * Get the user that created the account.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}