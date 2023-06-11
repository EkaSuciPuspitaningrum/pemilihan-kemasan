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
        'id_pengetahuan', 'jenis_kemasan', 'kriteria_produk', 'nilai_mb', 'nilai_md', 'nilai_cf'
    ];  
}
