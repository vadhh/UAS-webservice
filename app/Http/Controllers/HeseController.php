<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HeseController extends Controller
{
    public function index()
    {
        // Fetch the data from the database
        $products = DB::table('produk')
            ->select('id', 'kat_id', 'nama', 'harga', 'gambar')
            ->whereIn('kat_id', [31, 32, 33])
            ->limit(8)
            ->get();

        return view('hese', compact('products'));
    }
}
