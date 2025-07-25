<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id',
        'user_type',
        'bio',
        'address',
        'city',
        'postal_code',
        'country',
        'website',
        'image_path',
        'user_id',
        ];
        protected $casts = [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public  function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');

    }

    public function hasPermission($permission)
    {
        if (!isset($this->permissionsCache)) {
            $this->permissionsCache = $this->role->permissions->pluck('slug')->toArray();
        }
        return in_array($permission, $this->permissionsCache);
    }

    public function hasAnyPermission($permissions)
    {
        if (!isset($this->permissionsCache)) {
            $this->permissionsCache = $this->role->permissions->pluck('slug')->toArray();
        }
        return !empty(array_intersect($permissions, $this->permissionsCache));
    }

}
