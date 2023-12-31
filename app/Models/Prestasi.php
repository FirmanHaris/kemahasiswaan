<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $table = 'prestasi';
    protected $primaryKey = 'id_prestasi';
    protected $fillable = [
        'nama_kegiatan',
        'slug',
        'tgl_kegiatan',
        'gambar_kegiatan'
    ];
}
