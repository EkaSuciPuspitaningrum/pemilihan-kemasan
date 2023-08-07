<?php

// app/Models/Admin.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'role',
        'email',
        'password',
        'password_hash',

    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role');
    }

    public function hasRole($roleName)
    {
        return $this->roles->contains('name', $roleName);
    }
}
