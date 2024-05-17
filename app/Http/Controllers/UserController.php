<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['title'] = "Data User - Logisthing Perumdam Tirta Jaya Pamekasan";
        $data['stok_barang'] = Barang::where('stok', '<=', 10)->get();
        if(request()->ajax()) {
            return datatables()->of(User::get())
            ->addColumn('action', 'user.user-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('user.index', $data);
    }

    public function store(Request $request)
    {

        $userId = $request->id;

        $user   =   User::updateOrCreate(
                    [
                     'id' => $userId
                    ],
                    [
                        'nama' => $request->nama,
                        'jabatan' => $request->jabatan,
                        'username' => $request->username,
                    ]);

        return Response()->json($user);
    }

    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $user  = User::where($where)->first();

        return Response()->json($user);
    }

    public function destroy(Request $request)
    {
        $user = User::where('id',$request->id)->delete();

        return Response()->json($user);
    }
}