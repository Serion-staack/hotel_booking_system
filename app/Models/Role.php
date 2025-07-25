<?php

namespace App\Models;

use App\Models\Admin\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'title',
        'description',
        'notes',
        'status',
        'background_color',
        'text_color',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
