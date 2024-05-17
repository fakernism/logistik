<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = "Barang Masuk - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();
        $data['barang'] = Barang::get();
        $data['satuan'] = Satuan::get();

        if(request()->ajax()) {

            $data = BarangMasuk::join('barangs', 'barang_masuks.kodebarang', '=', 'barangs.kodebarang')
            ->select('barang_masuks.*', 'barangs.namabarang')
            ->get();

            return datatables()->of($data)
            ->addColumn('action', 'barang-masuk.barang-masuk-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('barang-masuk.index', $data);
    }

    public function getBarang($id)
    {
        $barang = Barang::where('kodebarang', $id)->get();
        return response()->json($barang);
    }

    public function store(Request $request)
    {

        $barangMasukId = $request->id;

        $barangMasuk   =   BarangMasuk::updateOrCreate(
                    [
                     'id' => $barangMasukId
                    ],
                    [
                    'created_at' => $request->created_at,
                    'kodebarang' => $request->kodebarang,
                    'jumlah_masuk' => $request->jumlah_masuk,
                    'harga' => $request->harga,
                    'lampiran' => $request->lampiran,
                    ]);

        return Response()->json($barangMasuk);
    }

    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $barangMasuk  = BarangMasuk::where($where)->first();

        return Response()->json($barangMasuk);
    }

    public function destroy(Request $request)
    {
        $barangMasuk = BarangMasuk::where('id',$request->id)->delete();

        return Response()->json($barangMasuk);
    }
}