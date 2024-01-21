<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tujuan;

class ApiTujuanController extends Controller
{
    public function tujuan(){
        $tujuan= Tujuan::all();

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $tujuan

        ];
        return response()->json($data,200);
    }

    public function show($id_tujuan){
        $tujuan= Tujuan::find($id_tujuan);

        if(!$tujuan){
            return response()->json('Data Tidak Ditemukan');
        };

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $tujuan

        ];
        return response()->json($data,200);
    }

//Menambahkan Data Di API
    public function create(Request $request)
    {

        $data= Tujuan::create($request->all());

        return response()->json(['message' => 'Product created successfully', 'data' => $data], 201);
    }

    public function update(Request $request, $id_tujuan){

        $tujuan= Tujuan::find($id_tujuan);

        if(!$tujuan){
            return response()->json('Data Tidak Ditemukan');
        };

        $tujuan -> update($request->all());

        $data=[
            'message'=>'Data Berhasil Diubah',
            'data'=> $tujuan

        ];
        return response()->json($data,200);
    }

    public function delete(Request $request, $id_tujuan){

        $tujuan= Tujuan::find($id_tujuan);

        if(!$tujuan){
            return response()->json('Data Tidak Ditemukan');
        };

        $tujuan -> delete();

        $data=[
            'message'=>'Data Berhasil Dihapus',
            'data'=> $tujuan

        ];
        return response()->json($data,200);
    }
}
