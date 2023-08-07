<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPakar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'calon_pakar';

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
}
