<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = "Barang Keluar - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();
        $data['barang'] = Barang::where('stok', '!=', 0)->get();
        $data['satuan'] = Satuan::get();

        if(request()->ajax()) {

            $data = BarangKeluar::join('barangs', 'barang_keluars.kodebarang', '=', 'barangs.kodebarang')
            ->select('barang_keluars.*', 'barangs.namabarang')
            ->get();

            // if($request->filled('from_date') && $request->filled('to_date'))
            // {
            //     $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
            // }


            return datatables()->of($data)
            ->addColumn('action', 'barang-keluar.barang-keluar-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('barang-keluar.index', $data);
    }

    public function getBarang($id)
    {
        $barang = Barang::where('kodebarang', $id)->get();
        return response()->json($barang);
    }

    public function store(Request $request)
    {

        $barangKeluarId = $request->id;

        $barangKeluar   =   BarangKeluar::updateOrCreate(
                    [
                     'id' => $barangKeluarId
                    ],
                    [
                    'created_at' => $request->created_at,
                    'kodebarang' => $request->kodebarang,
                    'jumlah_keluar' => $request->jumlah_keluar,
                    'harga' => $request->harga,
                    'lampiran' => $request->lampiran,
                    ]);

        return Response()->json($barangKeluar);
    }

    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $barangKeluar  = BarangKeluar::where($where)->first();

        return Response()->json($barangKeluar);
    }

    public function destroy(Request $request)
    {
        $barangKeluar = BarangKeluar::where('id',$request->id)->delete();

        return Response()->json($barangKeluar);
    }

}