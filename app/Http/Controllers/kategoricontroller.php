<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class kategoricontroller extends Controller
{
    public function index()
    {
        $kategoris = kategori::all();
        return view('kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategori.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|unique:kategori,id_kategori',
            'nama_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        $kategoris = [
            'id_kategori' => $request->input('id_kategori'),
            'nama_kategori' => $request->input('nama_kategori'),
            'deskripsi_kategori' => $request->input('deskripsi_kategori'),
        ];
        kategori::create($kategoris);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kategori.index')->with('success', 'kategori berhasil ditambahkan.');
    }

    public function edit($id_kategori)
    {
        $kategori = kategori::findOrFail($id_kategori);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id_kategori)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        $kategori = kategori::findOrFail($id_kategori);

        $kategori->update([
            'id_kategori' => $request->id_kategori,
            'nama_kategori' => $request->nama_kategori,
            'deskripsi_kategori' => $request->deskripsi_kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    
        public function delete($id_kategori)
    {
        // Temukan kategori berdasarkan ID
        $kategori = Kategori::find($id_kategori);

        // Periksa apakah kategori ditemukan
        if (!$kategori) {
            return redirect()->route('kategori.index')->with('error', 'Kategori tidak ditemukan.');
        }

        // Periksa apakah masih ada produk yang terkait dengan kategori
        $produkCount = produk::where('id_kategori', $id_kategori)->count();
        // dd($produkCount); 
        if ($produkCount > 0) {
            return redirect()
            ->route('kategori.index')
            ->with('error', 'Tidak dapat menghapus kategori ini karena masih ada produk terkait.')
            ->with('showErrorAlert', true);
        }

        // Hapus kategori jika tidak ada produk terkait
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
