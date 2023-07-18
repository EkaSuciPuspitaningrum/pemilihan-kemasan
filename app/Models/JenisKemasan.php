<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKemasan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'jenis_kemasan';

    protected $fillable = [
        'id', 'id_kemasan', 'jenis_kemasan', 'keterangan_kemasan'
    ];  

    
}
