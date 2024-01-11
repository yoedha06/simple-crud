<?php

namespace App\Http\Controllers;

use App\Models\produkbiasa;
use Illuminate\Http\Request;

class produkbiasacontroller extends Controller
{
    public function index()
    {
        $produkbiasa = produkbiasa::all();
        return view('admin.produk-biasa.index', compact('produkbiasa'));
    }

    public function create()
    {
        return view('admin.produk-biasa.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|unique:produk,id_produk',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'keterangan' => 'required',
        ]);

        $produkbiasa = [
            'id_produk' => $request->input('id_produk'),
            'nama_produk' => $request->input('nama_produk'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'keterangan' => $request->input('keterangan'),
        ];
        produkbiasa::create($produkbiasa);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.produk-biasa.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id_produk)
    {
        $produkbiasa = produkbiasa::findOrFail($id_produk);
        return view('admin.produk-biasa.edit', compact('produkbiasa'));
    }

    public function update(Request $request, $id_produk)
{
    $request->validate([
        'id_produk' => 'required',
        'nama_produk' => 'required',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'keterangan' => 'required',
    ]);

    $produk = produkbiasa::findOrFail($id_produk);

    $produk->update([
        'id_produk' => $request->id_produk,
        'nama_produk' => $request->nama_produk,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'keterangan' => $request->keterangan,
    ]);

    return redirect()->route('admin.produk-biasa.index')->with('success', 'Produk berhasil diperbarui.');
}

public function delete($id_produk)
{
   
    // Temukan produk berdasarkan ID
    $produkbiasa = produkbiasa::find($id_produk);

    // Periksa apakah produk ditemukan
    if (!$produkbiasa) {
        return redirect()->route('admin.produk-biasa.index')->with('error', 'Produk tidak ditemukan.');
    }

    // Hapus produk
    $produkbiasa->delete();

    return redirect()->route('admin.produk-biasa.index')->with('success', 'Produk berhasil dihapus.');
}
}
