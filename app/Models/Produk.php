<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = ['nama', 'kat_id', 'harga', 'gambar'];
    public $timestamps = false; // Disable timestamps
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kat_id', 'kategori');
    }
}
