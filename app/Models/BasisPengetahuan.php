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
        'jenis_kemasan_id', 
        'kriteria_id', 
        'cf'
    ];  

    public function kemasan()
    {
        return $this->belongsTo(JenisKemasan::class, 'jenis_kemasan_id');
    }

    public function kriteria()
    {
        return $this->belongsTo(KriteriaProduk::class, 'kriteria_id');
    }

}
