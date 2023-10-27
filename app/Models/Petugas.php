<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    
    // Inisialisasi Table Yang Digunakan
    protected $table = 'petugas';

    //Insialisasi Kolom
    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level'
    ];

    protected $hidden = [

    ];
        
}
