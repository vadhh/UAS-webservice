<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products from the database (limit to 4 for demonstration)
        $qfood = DB::table('produk')->whereIn('kat_id', [31, 32, 33])->limit(4)->get();
        
        // Return the view with the fetched data
        return view('index', compact('qfood'));
    }
}