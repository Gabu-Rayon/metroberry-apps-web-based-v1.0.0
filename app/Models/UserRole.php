<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;


     protected $table = 'roles';

    protected $fillable = ['name','gurd_name'];

    public function permission(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions', 'role_id', 'permission_id');
    }


    public function UserRole()
    {
        return $this->hasMany(Permission::class);
    }
}