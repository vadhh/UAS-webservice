<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;

class AdminController 
{
    public function index()
    {
        // Ambil data dari database
        $jumlahKategori = Kategori::count();
        $jumlahProduk = Produk::count();

        // Kirim data ke view
        return view('admin.index', compact('jumlahKategori', 'jumlahProduk'));
    }
}
