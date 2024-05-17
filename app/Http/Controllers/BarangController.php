<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = "Barang - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['satuan'] = Satuan::get();
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();

        if(request()->ajax()) {

            $data = Barang::get();

            if($request->filled('from_date') && $request->filled('to_date'))
            {
                $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
            }


            return datatables()->of($data)
            ->addColumn('action', 'barang.barang-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('barang.index', $data);
    }


    public function store(Request $request)
    {

        $barangId = $request->id;

        $barang   = Barang::updateOrCreate(
                    [
                     'id' => $barangId
                    ],
                    [
                    // 'kodebarang' => $request->kodebarang,
                    'namabarang' => strtoupper($request->namabarang),
                    'ukuran' => $request->ukuran,
                    'satuan' => $request->satuan,
                    'stok' => $request->stok,
                    'harga' => $request->harga,
                    'keterangan' => $request->keterangan,
                    ]);

        return Response()->json($barang);
    }

    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $barang  = Barang::where($where)->first();

        return Response()->json($barang);
    }

    public function destroy(Request $request)
    {
        $barang = Barang::where('id',$request->id)->delete();

        return Response()->json($barang);
    }
}