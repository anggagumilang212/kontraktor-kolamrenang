<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanankami extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'layanankami';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
