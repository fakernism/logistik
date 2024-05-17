<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\Satuan;
use Illuminate\Http\Request;

class LaporanBarangKeluarController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = "Laporan Barang Keluar - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();

        $data['barang'] = Barang::get();
        $data['satuan'] = Satuan::get();

        if(request()->ajax()) {

            $data = BarangKeluar::join('barangs', 'barang_keluars.kodebarang', '=', 'barangs.kodebarang')
            ->select('barang_keluars.*', 'barangs.namabarang')
            ->get();

            if($request->filled('from_date') && $request->filled('to_date'))
            {
                $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
            }

            return datatables()->of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('laporan.barang-keluar.index', $data);
    }
}