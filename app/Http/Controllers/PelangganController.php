<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Admin;
use Illuminate\Support\Facades\Session;



class PelangganController extends Controller
{
    public function Pelanggan()
    {
        $pelanggan = User::all();
        return view('pelanggan.masterpelanggan', compact('pelanggan'));

    }

    public function actionPelanggan(Request $request)
    {
        $data = [
            'email' => $request->input('Email'),
            'password' => $request->input('Password'),
        ];
        // dd(Auth::Attempt($data));


        if (Auth::Attempt($data)) {
            return redirect('masterpelanggan');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }


    public function actionlogout()
    {
        Auth::logout();
        return redirect('');
    }
}

