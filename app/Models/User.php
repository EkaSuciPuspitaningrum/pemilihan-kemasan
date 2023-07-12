<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $table = 'user';

    protected $fillable = [
        'name',
        'role',
        'email',
        'password',
    ];
}
