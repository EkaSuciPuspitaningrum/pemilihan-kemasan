<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
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
