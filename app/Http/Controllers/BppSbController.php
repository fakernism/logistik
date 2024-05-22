<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BppSb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data['barang'] = Barang::whereIn('id', function($query) {
            $query->select(DB::raw('MIN(id)'))
                  ->from('barangs')
                  ->groupBy('type');
        })->get();
        $q = BppSb::select(DB::raw('MAX(bpp_sbs.id)as kode'));
        $data['kd'] = "";
        if($q->count()>0){
            foreach($q->get() as $k)
            {
                $tmp = ((int) $k->kode) + 1;
                $data['kd'] = sprintf("%01s", $tmp);
            }
        }else{
            $data['kd'] = "1";
        }
        return view('bpp.sb.create', $data);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $bpp = [
                'nobppsb'       => $request->nobppsb,
                'nosamb'       => $request->nosamb,
                'namapel'       => $request->namapel,
                'alamatpel'     => $request->alamatpel,
                // 'created_at'    => $request->created_at,
                'created_at'    => date('Y-m-d H:i:s'),
                'diterima'      => $request->diterima,
            ];
            $id =  BppSb::insertGetId($bpp);

            foreach ($request->barang as $key => $value) {
                $getBarang = Barang::where('type',$value)->orderBy('harga')->get();
                $qty = $request->barang_qty[$key];
                foreach ($getBarang as $ky => $barang) {
                    if($qty<1){
                        continue;
                    }
                    if($barang->stok < $qty){
                        Barang::where(['id'=>$barang->id])->update(['stok'=> 0]);
                        $transaksi = [
                            'id_bpp' => $id,
                            'id_barang' => $barang->id,
                            'jumlah_barang' => $barang->stok
                        ];
                        DB::table('transaksi_bpp')->insert($transaksi);
                        $qty = $qty-$barang->stok;
                    }else{
                        Barang::where(['id'=>$barang->id])->update(['stok'=>DB::raw('stok - '.$qty)]);
                        $transaksi = [
                            'id_bpp' => $id,
                            'id_barang' => $barang->id,
                            'jumlah_barang' => $qty
                        ];
                        DB::table('transaksi_bpp')->insert($transaksi);
                        $qty = $qty-$barang->stok;
                    }
                }

            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
        }
        return redirect()->route('bppsb.index')->with('success', 'Product added successfully');
    }
}
