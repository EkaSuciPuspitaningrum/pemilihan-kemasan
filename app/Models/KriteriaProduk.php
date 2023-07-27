<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaProduk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'kriteria_produk';

    protected $fillable = [
        'id', 
        'kriteria_produk', 
        'keterangan_kriteria'
    ]; 
}
