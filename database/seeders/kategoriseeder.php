<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'id_kategori' => 1, 
            'nama_kategori' => 'Celana',
            'deskripsi_kategori' => 'Tersedia berbagai macam celana'
        ]);

        Kategori::create([
            'id_kategori' => 2, 
            'nama_kategori' => 'Kaos',
            'deskripsi_kategori' => 'Tersedia pilihan baju keren'
        ]);
    }
}
