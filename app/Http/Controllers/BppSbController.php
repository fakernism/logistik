<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BppSb;
use Illuminate\Http\Request;

class BppSbController extends Controller
{
    public function index()
    {
        $data['title'] = "BPP Sambungan Baru - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();

        if(request()->ajax()) {
            return datatables()->of(BppSb::get())
            ->addColumn('action', 'bpp.sb.bppsb-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('bpp.sb.index', $data);
    }

    public function create()
    {
        $data['title'] = "BPP Sambungan Baru - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();

        return view('bpp.sb.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'namapel'     => 'required',
            'alamatpel'   => 'required',
            'diterima'    => 'required',
            'clampsaddle' => 'required'
        ]);

        BppSb::create([
            'namapel'       => $request->namapel,
            'alamatpel'     => $request->alamatpel,
            'created_at'    => $request->created_at,
            'diterima'      => $request->diterima,
            'pipapvc'       => 2,
            'sockpvc'       => 1,
            'sockddpvc'     => 1,
            'sockdlpvc'     => 1,
            'kneepvc'       => 4,
            'kneeddpvc'      => 3,
            'kran'           => 1,
            'stopkran'       => 1,
            'dnipplegi'      => 2,
            'watermeter'     => 1,
            'flughkran'      => 1,
            'isolasiseltape' => 1,
            'lem'            => 1,
            'boxmeter'       => 1,
            'segelkoplingwm' => 1,
            'clampsaddle'    => 1,
            'clampsaddleUk'    => $request->clampsaddleUk,
        ]);

        // Barang::where('id', $request->id)->update();

        //redirect to index
        return redirect()->route('bppsb.index');
    }
}