<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $petugas = [
        [
            'nama_petugas' => 'Gwehj Admin',
            'username' => 'admin 1',
            'password' => bcrypt('123'),
            'telp' => '+62812 3456 7890',
            'level' => 'ADMIN'
        ],
        
        [
            'nama_petugas' => 'Gwehj Petugas',
            'username' => 'petugas 1',
            'password' => bcrypt('123'),
            'telp' => '+62809 8765 4321',
            'level' => 'PETUGAS'
        ],
       ];

       foreach ($petugas as $key => $value) 
       {
        Petugas::create($value);
       }
    }
}
