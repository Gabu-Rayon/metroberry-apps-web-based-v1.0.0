<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, HasPermissions, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'avatar',
        'created_by',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'password',
        'remember_token',
        'roles',
        'permissions',
    ];

    // protected $with = ['organisation'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'phone_verified_at' => 'datetime',
            'phone_status' => 'boolean',
            'email_status' => 'boolean',
            'organisation_status' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function driver()
    {
        return $this->hasOne(Driver::class);
    }

    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class, 'user_id', 'id');
    }
    public function organisation()
    {
        return $this->hasOne(Organisation::class);
    }


    // public function organisation(): BelongsTo
    // {
    //     return $this->belongsTo(Organisation::class);
    // }

    
    public function getOrganisationAttribute()
    {
        return $this->organisationRelation;
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($user) {
            $user->driver()->delete();
            $user->customer()->delete(); 
            $user->organisation()->delete();
        });
    }
    public function createdVehicleServices()
    {
        return $this->hasMany(VehicleService::class, 'created_by');
    }

    public function fuelling_station()
    {
        return $this->hasOne(RefuellingStation::class);
    }
}