<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil data user beserta profilnya
        $users = User::with('profile')->latest()->get();
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        // Membuat user baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->umur = $request->umur;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->save();

        // Membuat profile baru dan menghubungkannya dengan user yang baru dibuat
        $profile = new Profile();
        $profile->nama_toko = $request->nama_toko;
        $profile->rate = $request->rate;
        $profile->produk_terbaik = $request->produk_terbaik;
        $profile->deskripsi = $request->deskripsi;
        $profile->user_id = $user->id;
        $profile->save();

        // Memanggil metode postForm() untuk menyimpan data produk baru
        app(ProductController::class)->postForm(request(), $user->id);

        return redirect()->route('list-products', ['user_id' => $user->id]);
    }

    public function showProfile($user_id)
    {
        // Mengambil data user dan profil sesuai dengan ID yang diberikan
        $user = User::findOrFail($user_id);
        $profile = Profile::where('user_id', $user_id)->firstOrFail();

        return view('admin.profile', compact('user', 'profile', 'user_id'));
    }
}
