<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class MasterController extends Controller
{
    public function masterpelanggan()
    {
        $masterpelanggan= Master::all();
        return view('pelanggan.masterpelanggan', compact('masterpelanggan'));

    }

    public function masterpenyewa()
    {
        $masterpenyewa = Master::all();
        return view('penyewa.masterpenyewa', compact('masterpenyewa'));

    }

    public function masteradmin()
    {
        $masteradmin = Master::all();
        return view('admin.masteradmin', compact('masteradmin'));

    }

}
