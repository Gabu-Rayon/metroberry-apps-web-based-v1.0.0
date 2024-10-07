<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteLocations extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'name',
        'is_start_location',
        'is_end_location',
        'is_waypoint',
        'point_order',
    ];

    public function route()
    {
        return $this->belongsTo(Routes::class, 'route_id', 'id');
    }
}
