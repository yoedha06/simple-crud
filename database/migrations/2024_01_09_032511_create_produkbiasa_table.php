<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produkbiasa', function (Blueprint $table) {
            $table->bigInteger('id_produk')->primary();
            $table->string('nama_produk');
            $table->decimal('harga', 10, 2); 
            $table->integer('stok');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkbiasa');
    }
};
