<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showPengelolaan()
    {
        $data = [
            ['id' => '001', 'nama_barang' => 'Laptop Pro', 'kategori' => 'Elektronik', 'stok' => 15],
            ['id' => '002', 'nama_barang' => 'Mouse Gaming', 'kategori' => 'Aksesoris', 'stok' => 50],
            ['id' => '003', 'nama_barang' => 'Keyboard Mekanikal', 'kategori' => 'Aksesoris', 'stok' => 30],
        ];
        return view('pengelolaan', ['dataInventaris' => $data]);
    }

    public function showProfile()
    {
        return view('profile');
    }
}
