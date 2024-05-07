<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan halaman produk
    public function index()
    {
        // $products = Product::all();
        $products = Product::with('profile.user')->get();
        return view('store.products', compact('products'));
    }

    // Menampilkan form tambah produk
    public function getForm($user_id)
    {
        // return view('admin.tambah-product');
        return view('admin.tambah-product', compact('user_id'));
    }

    // Menyimpan data produk baru
    public function postForm(Request $request, $user_id)
    {
        if (!$request->filled('gambar')) {
            return redirect()->back()->with('error', 'Error. Field Gambar Produk Wajib diisi.');
        } elseif (!$request->filled('nama')) {
            return redirect()->back()->with('error', 'Error. Field Nama Produk Wajib diisi.');
        } elseif (!$request->filled('berat')) {
            return redirect()->back()->with('error', 'Error. Field Berat Wajib diisi.');
        } elseif (!$request->filled('harga')) {
            return redirect()->back()->with('error', 'Error. Field Harga Wajib diisi.');
        } elseif (!$request->filled('stok')) {
            return redirect()->back()->with('error', 'Error. Field Stok Wajib diisi.');
        } elseif (!$request->filled('kondisi')) {
            return redirect()->back()->with('error', 'Error. Field Kondisi Wajib diisi.');
        } elseif (!$request->filled('deskripsi')) {
            return redirect()->back()->with('error', 'Error. Field Deskripsi Wajib diisi.');
        }

        // Handle validasi form
        $request->validate([
            'gambar' => 'required|string',
            'nama' => 'required|string',
            'berat' => 'required|integer|min:0|max:1000000',
            'harga' => 'required|integer|min:0|max:10000000000',
            'stok' => 'required|integer|min:0|max:10000000000',
            'kondisi' => 'required|in:Baru,Bekas',
            'deskripsi' => 'required|string',
        ]);

        // Simpan data produk baru
        $product = new Product();
        $product->gambar = $request->gambar;
        $product->nama = $request->nama;
        $product->berat = $request->berat;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->kondisi = $request->kondisi;
        $product->deskripsi = $request->deskripsi;
        $product->user_id = $user_id; // Hubungkan produk dengan user
        $product->save();

        // Redirect kembali ke halaman produk
        return redirect()->route('list-products', $user_id);
    }

    // Menampilkan halaman list produk untuk admin
    public function listProducts($user_id)
    {
        $products = Product::where('user_id', $user_id)->oldest()->paginate(1000);
        return view('admin.list-products', compact('products', 'user_id'));
    }

    // Menampilkan form edit produk untuk admin
    public function edit($user_id, $id)
    {
        // Mengambil produk berdasarkan ID
        $product = Product::findOrFail($id);
        // Kirim $user_id dan $product ke view
        return view('admin.edit-product', compact('user_id', 'product'));
    }

    // Menyimpan perubahan pada produk
    public function update(Request $request, $user_id, $id)
    {
        // Handle validasi form
        $request->validate([
            'gambar' => 'required|string',
            'nama' => 'required|string',
            'berat' => 'required|integer|min:0|max:1000000',
            'harga' => 'required|integer|min:0|max:10000000000',
            'stok' => 'required|integer|min:0|max:10000000000',
            'kondisi' => 'required|in:Baru,Bekas',
            'deskripsi' => 'required|string',
        ]);

        // // Redirect kembali ke halaman list produk
        $product = Product::findOrFail($id);
        $product->update($request->all());

        // Redirect kembali ke halaman list produk
        return redirect()->route('list-products', $user_id);
    }

    // Menghapus produk
    public function destroy($user_id, $id)
    {
        Product::destroy($id);
        return redirect()->route('list-products', $user_id);
    }
}