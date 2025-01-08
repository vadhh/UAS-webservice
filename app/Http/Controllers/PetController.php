<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    public function index()
    {
        $qamphi = DB::table('produk')
            ->select('id', 'kat_id', 'nama', 'harga', 'gambar')
            ->whereIn('kat_id', [21, 22, 23, 24])
            ->limit(8)
            ->get();

        return view('pet', compact('qamphi'));
    }
}
