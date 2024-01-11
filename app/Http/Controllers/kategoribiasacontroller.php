<?php

namespace App\Http\Controllers;

use App\Models\kategoribiasa;
use App\Models\produkbiasa;
use Illuminate\Http\Request;

class kategoribiasacontroller extends Controller
{
    public function index()
    {
        $kategoribiasa = kategoribiasa::all();
        return view('admin.kategori-biasa.index', compact('kategoribiasa'));
    }

    public function create()
    {
        return view('admin.kategori-biasa.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|unique:kategori,id_kategori',
            'nama_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        $kategoribiasa = [
            'id_kategori' => $request->input('id_kategori'),
            'nama_kategori' => $request->input('nama_kategori'),
            'deskripsi_kategori' => $request->input('deskripsi_kategori'),
        ];
        kategoribiasa::create($kategoribiasa);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.kategori-biasa.index')->with('success', 'kategori berhasil ditambahkan.');
    }

    public function edit($id_kategori)
    {
        $kategoribiasa = kategoribiasa::findOrFail($id_kategori);
        return view('admin.kategori-biasa.edit', compact('kategoribiasa'));
    }

    public function update(Request $request, $id_kategori)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        $kategoribiasa = kategoribiasa::findOrFail($id_kategori);

        $kategoribiasa->update([
            'id_kategori' => $request->id_kategori,
            'nama_kategori' => $request->nama_kategori,
            'deskripsi_kategori' => $request->deskripsi_kategori,
        ]);

        return redirect()->route('admin.kategori-biasa.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    
        public function delete($id_kategori)
    {
        // Temukan kategori berdasarkan ID
        $kategoribiasa = Kategoribiasa::find($id_kategori);

        // Periksa apakah kategori ditemukan
        if (!$kategoribiasa) {
            return redirect()->route('admin.kategori-biasa.index')->with('error', 'Kategori tidak ditemukan.');
        }

        // Hapus kategori jika tidak ada produk terkait
        $kategoribiasa->delete();

        return redirect()->route('admin.kategori-biasa.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
