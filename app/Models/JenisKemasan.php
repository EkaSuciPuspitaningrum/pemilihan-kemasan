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
        'id',
        'jenis_kemasan', 
        'keterangan_kemasan',
        'created_at',
        'updated_at'
    ];  

    public function basis_pengetahuans()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }

    public function Pencarians()
    {
        return $this->hasMany(DataPencarian::class);        
    }
    
}
