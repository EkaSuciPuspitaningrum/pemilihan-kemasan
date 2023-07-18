<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasisPengetahuan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'pengetahuan';

    protected $fillable = [
        'id_pengetahuan', 'jenis_kemasan_id', 'kriteria_produk_id', 'nilai_cf'
    ];  


    public function user()
    {
        return $this->belongsTo(JenisKemasan::class);
        return $this->belongsTo(JenisProduk::class);

    }
}
