<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'admin';
    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'username',
        'role',
        'email',
        'password',
    ];
}
