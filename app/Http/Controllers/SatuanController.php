<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $data['title'] = "Satuan Barang - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();

        if(request()->ajax()) {
        $data = Satuan::get();

            return datatables()->of($data)
            ->addColumn('action', 'satuan.satuan-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('satuan.index', $data);
    }

    public function store(Request $request)
    {

        $satuanId = $request->id;

        $satuan   =   Satuan::updateOrCreate(
                    [
                     'id' => $satuanId
                    ],
                    [
                    'namasatuan' => strtoupper($request->namasatuan),
                    'singkatan' => strtoupper($request->singkatan),
                    ]);

        return Response()->json($satuan);
    }

    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $satuan  = Satuan::where($where)->first();

        return Response()->json($satuan);
    }

    public function destroy(Request $request)
    {
        $satuan = Satuan::where('id',$request->id)->delete();

        return Response()->json($satuan);
    }
}