<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'website';
    protected $fillable = [
        'nama',
        'judul_website',
        'deskripsi',
        'no_telp',
        'email',
        'alamat',
        'google_map',
        'sosmed_fb',
        'sosmed_twitter',
        'sosmed_instagram',
        'sosmed_youtube',
        'foto',

    ];
}
