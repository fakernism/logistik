<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $data['title'] = "Pengaturan - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();

        return view('pengaturan.index', $data);
    }
}