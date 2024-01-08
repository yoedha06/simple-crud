<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        produk::create([
            'id_produk' => '1011',
            'nama_produk' => 'Kaos panjang',
            'harga' => 200000,
            'stok' => 10,
            'keterangan' => 'Tersedia ukuran XL, L, M',
            'id_kategori' => '2',
        ]);
    }
}
