<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class ApiKendaraanController extends Controller
{

    public function kendaraan(){
        $kendaraan= Kendaraan::all();

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $kendaraan

        ];
        return response()->json($data,200);
    }

    public function show($id_kendaraan){
        $kendaraan= Kendaraan::find($id_kendaraan);

        if(!$kendaraan){
            return response()->json('Data Tidak Ditemukan');
        };

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $kendaraan

        ];
        return response()->json($data,200);
    }

//Menambahkan Data Di API
    public function create(Request $request)
    {

        $data= Kendaraan::create($request->all());

        return response()->json(['message' => 'Product created successfully', 'data' => $data], 201);
    }

    public function update(Request $request, $id_kendaraan){

        $kendaraan= Kendaraan::find($id_kendaraan);

        if(!$kendaraan){
            return response()->json('Data Tidak Ditemukan');
        };

        $kendaraan -> update($request->all());

        $data=[
            'message'=>'Data Berhasil Diubah',
            'data'=> $kendaraan

        ];
        return response()->json($data,200);
    }

    public function delete(Request $request, $id_kendaraan){

        $kendaraan= Kendaraan::find($id_kendaraan);

        if(!$kendaraan){
            return response()->json('Data Tidak Ditemukan');
        };

        $kendaraan -> delete();

        $data=[
            'message'=>'Data Berhasil Dihapus',
            'data'=> $kendaraan

        ];
        return response()->json($data,200);
    }

}
