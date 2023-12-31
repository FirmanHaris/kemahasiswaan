<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'beasiswa';
    protected $primaryKey = 'id_beasiswa';
    protected $fillable = [
        'nama_beasiswa',
        'jenis_beasiswa',
        'mulai_pendaftaran',
        'batas_pendaftaran',
        'min_ipk'
    ];
}
