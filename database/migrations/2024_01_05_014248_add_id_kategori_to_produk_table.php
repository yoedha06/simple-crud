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
    Schema::table('produk', function (Blueprint $table) {
        $table->biginteger('id_kategori')->after('id_produk')->constrained('kategori')->onDelete('cascade');
        $table->foreign('id_kategori', 'produk_id_kategori_foreign')->references('id_kategori')->on('kategori');
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::table('produk', function (Blueprint $table) {
        $table->dropColumn('id_kategori');
    });
}

};
