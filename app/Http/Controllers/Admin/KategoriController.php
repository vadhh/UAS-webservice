<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;
class KategoriController extends AdminController
{
    public function index()
    {
        $jumlahProduk = Produk::count();
        $jumlahKategori = Kategori::count(); // Hitung jumlah kategori
        
        $kategori = Kategori::all();         // Ambil semua data kategori
        return view('admin.kategori', compact('jumlahProduk','jumlahKategori', 'kategori'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|unique:kategori,kategori',
            'nama' => 'required',
        ]);

        Kategori::create($request->only(['kategori', 'nama']));
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }
}
