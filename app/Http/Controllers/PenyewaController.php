<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PenyewaController extends Controller
{
    public function penyewa()
    {
            $penyewa = Penyewa::all();
            return view('/', compact('penyewa'));

    }

    public function insertpenyewa(request $request){
        Penyewa::create($request->all());
        return redirect()->route('penyewa')->with('success','Data Berhasil Ditambahkan!');
    }
}
