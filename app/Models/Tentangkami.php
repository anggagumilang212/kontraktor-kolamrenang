<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentangkami extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tentangkami';
    protected $fillable = [
        'judul',
        'fasilitas_1',
        'fasilitas_2',
        'fasilitas_3',
        'fasilitas_4',
        'foto',
        'deskripsi',
    ];
}
