<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Login;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
    public function Admin()
    {
        $admin = User::all();
        return view('admin.masteradmin', compact('admin'));

    }

    public function actionAdmin(Request $request)
    {
        $data = [
            'email' => $request->input('Email'),
            'password' => $request->input('Password'),
        ];
        // dd(Auth::Attempt($data));


        if (Auth::Attempt($data)) {
            return redirect('masteradmin');
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

