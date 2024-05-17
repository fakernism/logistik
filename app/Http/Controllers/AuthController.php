<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $data['title'] = "Login - Logisthing Perumdam Tirta Jaya Pamekasan";
        return view('auth.login', $data);
    }

    function login(Request $request)
    {
        $request->validate([
            'username'     => 'required',
            'password'  => 'required'
        ],[
            'username.required' => 'Wajib diisi',
            'password.required' => 'Wajib diisi',
        ]);

        $info_login = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($info_login)){

            if(isset($request->remember)&&!empty($request->remember )){
                setcookie("username", $request->username, time()+18000);
                setcookie("password", $request->password, time()+18000);
            } else{
                setcookie("username", "");
                setcookie("password", "");
            }
            return redirect('/')->with('success', 'Selamat Datang');
        }else{
            return redirect('login')->withErrors('Username dan Password Tidak Valid');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}