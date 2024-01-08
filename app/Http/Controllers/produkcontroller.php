<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public function index()
    {
        $produks = produk::all();
        return view('produk.index', compact('produks'));
    }

    public function create()
    {
        $kategoris = kategori::all();
        return view('produk.tambahproduk', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|unique:produk,id_produk',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'keterangan' => 'required',
            'id_kategori' => 'required|exists:kategori,id_kategori',
        ]);

        $produks = [
            'id_produk' => $request->input('id_produk'),
            'nama_produk' => $request->input('nama_produk'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'keterangan' => $request->input('keterangan'),
            'id_kategori' => $request->input('id_kategori'),
        ];
        produk::create($produks);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id_produk)
    {
        $produk = produk::findOrFail($id_produk);
        $kategoris = kategori::all();
        return view('produk.editproduk', compact('produk', 'kategoris'));
    }

    public function update(Request $request, $id_produk)
{
    $request->validate([
        'id_produk' => 'required',
        'nama_produk' => 'required',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'keterangan' => 'required',
        'id_kategori' => 'required|exists:kategori,id_kategori',
    ]);

    $produk = produk::findOrFail($id_produk);

    $produk->update([
        'id_produk' => $request->id_produk,
        'nama_produk' => $request->nama_produk,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'keterangan' => $request->keterangan,
        'id_kategori' => $request->input('id_kategori'),
    ]);

    return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
}

public function delete($id_produk)
{
   
    // Temukan produk berdasarkan ID
    $produk = produk::find($id_produk);

    // Periksa apakah produk ditemukan
    if (!$produk) {
        return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
    }

    // Hapus produk
    $produk->delete();

    return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
}

}

