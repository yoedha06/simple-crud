<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produk';
    protected $table = 'produk';
    protected $fillable = ['id_produk', 'nama_produk', 'harga', 'stok', 'keterangan','id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
