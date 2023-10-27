<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    // Inisialisasi Table Yang Digunakan
    protected $table = 'masyarakat';

    //Insialisasi Kolom
    protected $fillable = [
        'nik',
        'username',
        'password',
        'nama',
        'no_telp'
    ];

    protected $hidden = [
        
    ];
}
