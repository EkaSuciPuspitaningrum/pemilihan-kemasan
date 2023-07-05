<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'user';

    protected $fillable = [
        'first_name_user', 
        'last_name_user',
        'role',
        'email',
        'password'
    ];  
}
