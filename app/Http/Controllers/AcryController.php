<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AcryController extends Controller
{
    public function index()
    {
        $products = DB::table('produk')
                      ->whereIn('kat_id', [41, 42, 43])
                      ->limit(8)
                      ->get();

        return view('acry', compact('products'));
    }
}
