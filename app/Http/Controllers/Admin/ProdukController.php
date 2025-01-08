<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends AdminController

{
    public function index()
    {
        $produk = Produk::with('kategori')->get();
        $kategori = Kategori::all();
        return view('admin.produk', compact('produk', 'kategori'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'kat_id' => 'required|exists:kategori,kategori',  
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('gambar')) {
            $filePath = $request->file('gambar')->store('images', 'public');
        }

        Produk::create([
            
            'nama' => $request->nama,
            'kat_id' => $request->kat_id,
            'harga' => $request->harga,
            'gambar' => $filePath,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil disimpan.');
    }
}