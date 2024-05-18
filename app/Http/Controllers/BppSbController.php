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
        $transaksi = DB::table('transaksi_bpp')
        ->leftJoin('bpp_sbs','transaksi_bpp.id_bpp','bpp_sbs.id')
        ->leftJoin('barangs','transaksi_bpp.id_barang','barangs.id')
        ->where('transaksi_bpp.id_bpp',4)
        ->get();
        dd($transaksi);
        // dd($request->all());
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
            $barang = [
                'cek valve'     => 12
                // 'sockpvc'       => 1,
                // 'sockddpvc'     => 1,
                // 'sockdlpvc'     => 1,
                // 'kneepvc'       => 4,
                // 'kneeddpvc'      => 3,
                // 'kran'           => 1,
                // 'stopkran'       => 1,
                // 'dnipplegi'      => 2,
                // 'watermeter'     => 1,
                // 'flughkran'      => 1,
                // 'isolasiseltape' => 1,
                // 'lem'            => 1,
                // 'boxmeter'       => 1,
                // 'segelkoplingwm' => 1,
                // 'clampsaddle'    => 1,
            ];

            foreach ($barang as $key => $value) {
                $getBarang = Barang::where('type',$key)->orderBy('harga')->get();
                foreach ($getBarang as $barang) {
                    // dd($barang->stok,$value);
                    if($value<1){
                        continue;
                    }
                    if($barang->stok < $value){
                        // dd('test');
                        Barang::where(['id'=>$barang->id])->update(['stok'=> 0]);
                        $transaksi = [
                            'id_bpp' => $id,
                            'id_barang' => $barang->id,
                            'jumlah_barang' => $barang->stok
                        ];
                        DB::table('transaksi_bpp')->insert($transaksi);
                        $value = $value-$barang->stok;
                    }else{
                        // dd($value,$barang->id,$barang->stok);
                        Barang::where(['id'=>$barang->id])->update(['stok'=>DB::raw('stok - '.$value)]);
                        $transaksi = [
                            'id_bpp' => $id,
                            'id_barang' => $barang->id,
                            'jumlah_barang' => $value
                        ];
                        DB::table('transaksi_bpp')->insert($transaksi);
                    }
                }

            }
            DB::commit();
            dd('sukses');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
        }




    //     $data = [
    //         'nobppsb'       => $request->nobppsb,
    //         'nosamb'       => $request->nosamb,
    //         'namapel'       => $request->namapel,
    //         'alamatpel'     => $request->alamatpel,
    //         'created_at'    => $request->created_at,
    //         'diterima'      => $request->diterima,
    //         'pipapvc'       => 2,
    //         'sockpvc'       => 1,
    //         'sockddpvc'     => 1,
    //         'sockdlpvc'     => 1,
    //         'kneepvc'       => 4,
    //         'kneeddpvc'      => 3,
    //         'kran'           => 1,
    //         'stopkran'       => 1,
    //         'dnipplegi'      => 2,
    //         'watermeter'     => 1,
    //         'flughkran'      => 1,
    //         'isolasiseltape' => 1,
    //         'lem'            => 1,
    //         'boxmeter'       => 1,
    //         'segelkoplingwm' => 1,
    //         'clampsaddle'    => 1,
    //         'clampsaddleUk'    => $request->clampsaddleUk,
    //    ];

    // Kita asusmsikan aja bentuk lemparan gini biar enak
    $data = [
        'nobppsb'       => $request->nobppsb,
        'nosamb'       => $request->nosamb,
        'namapel'       => $request->namapel,
        'alamatpel'     => $request->alamatpel,
        'created_at'    => $request->created_at,
        'diterima'      => $request->diterima,
        'barang' => [
            'cek valve'     => 12
            // 'sockpvc'       => 1,
            // 'sockddpvc'     => 1,
            // 'sockdlpvc'     => 1,
            // 'kneepvc'       => 4,
            // 'kneeddpvc'      => 3,
            // 'kran'           => 1,
            // 'stopkran'       => 1,
            // 'dnipplegi'      => 2,
            // 'watermeter'     => 1,
            // 'flughkran'      => 1,
            // 'isolasiseltape' => 1,
            // 'lem'            => 1,
            // 'boxmeter'       => 1,
            // 'segelkoplingwm' => 1,
            // 'clampsaddle'    => 1,
        ],
        // 'clampsaddleUk'    => $request->clampsaddleUk,
    ];



    //    BppSb::create($data);
    //Pengurangan Stock
    foreach ($data['barang'] as $key => $value) {
        $getBarang = Barang::where('type',$key)->orderBy('harga')->get();
        foreach ($getBarang as $barang) {
            // dd($barang->stok,$value);
            if($value<1){
                continue;
            }
            if($barang->stok < $value){
                // dd('test');
                Barang::where(['id'=>$barang->id])->update(['stok'=> 0]);
                $value = $value-$barang->stok;
            }else{
                // dd($value,$barang->id,$barang->stok);
                Barang::where(['id'=>$barang->id])->update(['stok'=>DB::raw('stok - '.$value)]);
            }
        }

    }
    dd('sukses');

       $id= [1,2,3]; // id barang yg akan dikurangi stoknya
       $kurangistok = [2,2,2]; // stok sekarang akan dikurangi data ini

       foreach ($id as $key=>$value){
        DB::table('barangs')
        ->where('id', $value)
        ->update([
        'stok' => DB::raw('stok - ' . $kurangistok[$key])
        ]);
        }

    //    Barang::where('id', $id)->decrement('stok', (int) $kurangistok);

    //    $item->where([
    //     ['product_id', '=', $item['product_id']],
    //     ['size', '=', $item['size']],
    // ])->decrement('stock', (int) $request->quantity);


        return redirect()->route('bppsb.index')->with('success', 'Product added successfully');
    }
}