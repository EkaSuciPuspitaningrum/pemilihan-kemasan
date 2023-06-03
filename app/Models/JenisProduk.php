<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'jenis_produk';

    protected $fillable = [
        'id_produk', 'jenis_produk', 'keterangan_produk'
    ];  
}
