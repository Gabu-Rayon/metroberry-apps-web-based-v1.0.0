<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;
    protected $table = 'routes';

    protected $fillable = [
        'county',
        'name',
        'created_by',
    ];

    public function start_location()
    {
        return $this->hasOne(RouteLocations::class, 'route_id', 'id')->where('is_start_location', 1);
    }

    public function end_location()
    {
        return $this->hasOne(RouteLocations::class, 'route_id', 'id')->where('is_end_location', 1);
    }

    public function waypoints()
    {
        return $this->hasMany(RouteLocations::class, 'route_id', 'id')->where('is_waypoint', 1)->orderBy('point_order');
    }

    public function route_locations()
    {
        return $this->hasMany(RouteLocations::class, 'route_id', 'id');
    }
}