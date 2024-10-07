<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class PermissionGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'permission_name',
        'group_name'
    ];
    
    public function permission () {
        return $this->belongsTo(Permission::class, 'permission_name', 'name');
    }

}