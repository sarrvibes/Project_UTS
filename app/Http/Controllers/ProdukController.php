<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function tampil()
    {
        $produk = Produk::all();
        $data = array(
            'title' => 'Table Produk',
        );
        return view('produk.tampil', compact('produk'), $data);
    }

    public function create()
    {
        $data = array(
            'title' => 'form produk',
        );
        return view('produk.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.tampil')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Produk $produk)
    {
        $data = array(
            'title' => 'edit produk',
        );
        return view('produk.edit', compact('produk'), $data);
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $produk->update($request->all());

        return redirect()->route('produk.tampil')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.tampil')->with('success', 'Produk berhasil dihapus.');
    }
}
