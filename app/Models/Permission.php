<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    protected $fillable = ['name','guard_name'];

    /**
     * The roles that belong to the permission.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(UserRole::class, 'role_has_permissions', 'permission_id', 'role_id');
    }


    public function permission()
    {
        return $this->hasMany(UserRole::class);
    }
}