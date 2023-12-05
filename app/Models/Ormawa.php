<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    use HasFactory;
    protected $table = 'ormawa';
    protected $primaryKey = 'id_ormawa';
    protected $fillable = [
        'status',
        'ketua',
        'detail_ormawa'
    ];
}
