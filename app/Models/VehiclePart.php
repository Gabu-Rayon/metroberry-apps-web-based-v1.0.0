<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclePart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'category_id',
        'brand',
        'model_number',
        'price',
        'quantity',
        'condition',
        'compatibility',
        'notes',
    ];

    public function category(){
        return $this->belongsTo(VehiclePartCategory::class);
    }
}
