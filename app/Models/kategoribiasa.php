<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoribiasa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kategori';
    protected $table = 'kategoribiasa';
    public $incrementing = 'false';
    protected $fillable = ['id_kategori','nama_kategori', 'deskripsi_kategori'];
}
