<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create()
    {
        return view('produk.create');
    }
    public function tampil()
    {
        return view('produk.tampil');
    }
}
