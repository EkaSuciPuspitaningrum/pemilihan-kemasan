<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pakar extends Authenticatable
{
    use Notifiable;
    protected $table = 'pakar';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name_pakar', 
        'last_name_pakar',
        'role',
        'dokumen',
        'pend_terakhir',
        'nama_instansi',
        'email',
        'password',
        'password_hash',
        'created_at'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role');
    }

    public function hasRole($roleName)
    {
        return $this->roles->contains('first_name_pakar', $roleName);
    }
}
