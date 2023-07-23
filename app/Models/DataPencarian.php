<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPencarian extends Model
{
    protected $table = 'data_pencarian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_produk',
        'berat_produk',
        'ukuran_produk',
        'volume_produk',
        'kemasan_id',
         'presentase'
    ];

    public function Kemasan(){
        return $this->belongsTo(JenisKemasan::class, 'kemasan_id');
    } 
}
