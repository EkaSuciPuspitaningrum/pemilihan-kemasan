<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id';
    
    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'role');
    }

    public function pakars()
    {
        return $this->belongsToMany(Pakar::class, 'role');
    }

    public function hasAdminRole($roleName)
    {
        return $this->admins->contains('role', $roleName);
    }

    public function hasPakarRole($roleName)
    {
        return $this->pakars->contains('role', $roleName);
    }
}
