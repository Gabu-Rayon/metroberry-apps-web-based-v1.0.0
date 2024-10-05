<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'repair_id',
        'name',
        'description',
    ];
}
