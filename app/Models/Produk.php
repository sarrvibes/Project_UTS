<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'products'; // Pastikan nama tabel sesuai
    protected $fillable = ['nama_produk', 'kategori', 'harga', 'stok'];
    public $timestamps = false; 

}
