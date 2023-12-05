<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya_mhs extends Model
{
    use HasFactory;
    protected $table = 'karya_mhs';
    protected $primaryKey = 'id_karya';
    protected $fillable = [
        'judul_karya',
        'jenis_karya',
        'keterangan',
        'gambar_karya'
    ];
}
