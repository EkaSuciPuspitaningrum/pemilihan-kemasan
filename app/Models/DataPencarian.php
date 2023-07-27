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
        'jenis_kemasan_id',
        // 'persen',
    ];

    public function kemasan(){
        return $this->belongsTo(JenisKemasan::class, 'jenis_kemasan_id');
    } 
}
