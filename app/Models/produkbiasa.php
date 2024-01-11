<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkbiasa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produk';
    protected $table = 'produkbiasa';
    protected $fillable = ['id_produk', 'nama_produk', 'harga', 'stok', 'keterangan'];
}
