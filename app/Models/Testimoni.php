<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'testimoni';
    protected $fillable = [
        'foto',
        'nama',
        'profesi',
        'deskripsi',
    ];
}
