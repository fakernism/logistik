<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Satuan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = "Dashboard - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();
        $data['barang'] = Barang::count();
        $data['satuan'] = Satuan::count();
        $data['barangmasuk'] = BarangMasuk::count();
        $data['barangkeluar'] = BarangKeluar::count();
        return view('dashboard', $data);
    }
}