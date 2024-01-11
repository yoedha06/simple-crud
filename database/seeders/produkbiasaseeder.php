<?php

namespace Database\Seeders;

use App\Models\produkbiasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkbiasaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        produkbiasa::create([
            'id_produk' => '1022',
            'nama_produk' => 'Kaos pendek',
            'harga' => 200000,
            'stok' => 10,
            'keterangan' => 'Tersedia ukuran XL, L, M',
        ]);
    }
}
