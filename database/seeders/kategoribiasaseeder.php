<?php

namespace Database\Seeders;

use App\Models\kategoribiasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kategoribiasaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kategoribiasa::create([
            'id_kategori' => 1, 
            'nama_kategori' => 'jaket',
            'deskripsi_kategori' => 'Tersedia berbagai macam celana'
        ]);

        kategoribiasa::create([
            'id_kategori' => 2, 
            'nama_kategori' => 'Kaos',
            'deskripsi_kategori' => 'Tersedia pilihan baju keren'
        ]);
    }
}
