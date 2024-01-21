<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class ApiPelangganController extends Controller
{
    public function pelanggan(){
        $pelanggan= Pelanggan::all();

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $pelanggan

        ];
        return response()->json($data,200);
    }

    public function show($id_pelanggan){
        $pelanggan= Pelanggan::find($id_pelanggan);

        if(!$pelanggan){
            return response()->json('Data Tidak Ditemukan');
        };

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $pelanggan

        ];
        return response()->json($data,200);
    }

//Menambahkan Data Di API
    public function create(Request $request)
    {

        $data= Pelanggan::create($request->all());

        return response()->json(['message' => 'Product created successfully', 'data' => $data], 201);
    }

    public function update(Request $request, $id_pelanggan){

        $pelanggan= Pelanggan::find($id_pelanggan);

        if(!$pelanggan){
            return response()->json('Data Tidak Ditemukan');
        };

        $pelanggan -> update($request->all());

        $data=[
            'message'=>'Data Berhasil Diubah',
            'data'=> $pelanggan

        ];
        return response()->json($data,200);
    }

    public function delete(Request $request, $id_pelanggan){

        $pelanggan= Pelanggan::find($id_pelanggan);

        if(!$pelanggan){
            return response()->json('Data Tidak Ditemukan');
        };

        $pelanggan -> delete();

        $data=[
            'message'=>'Data Berhasil Dihapus',
            'data'=> $pelanggan

        ];
        return response()->json($data,200);
    }
}
