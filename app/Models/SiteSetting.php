<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $table = 'site_settings';

    protected $fillable = [
        'site_url',
        'name_of_website',
        'description',
        'station_code_prefix',
        'maintenance_code_prefix',
        'station_requisition_prefix',
        'maintenance_requisition_prefix',
        'environment',
        'logo_white',
        'logo_black',
        'site_favicon',
        'app_debug',
        'force_https'
        
    ];
}