<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Admin;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/masterpelanggan');
        }else{
            return view('login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->role == 'Admin') {
                return redirect('masteradmin');
            } elseif ($user->role == 'Penyewa') {
                return redirect('masterpenyewa');
            } else {
                // Handle other roles or redirect as needed
                return redirect('masterpelanggan');
            }
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }





    public function actionlogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
