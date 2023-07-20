<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPencarian extends Model
{
    protected $table = 'tabel_data_pencarian';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'kode_user',
        'nama_produk',
        'berat_produk',
        'ukuran_produk',
        'volume_produk'
    ];
}
