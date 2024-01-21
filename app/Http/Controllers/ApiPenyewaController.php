<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class ApiPenyewaController extends Controller
{
    public function penyewa(){
        $penyewa= Penyewa::all();

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $penyewa

        ];
        return response()->json($data,200);
    }

    public function show($id_penyewa){
        $penyewa= Penyewa::find($id_penyewa);

        if(!$penyewa){
            return response()->json('Data Tidak Ditemukan');
        };

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $penyewa

        ];
        return response()->json($data,200);
    }

//Menambahkan Data Di API
    public function create(Request $request)
    {

        $data= Penyewa::create($request->all());

        return response()->json(['message' => 'Product created successfully', 'data' => $data], 201);
    }

    public function update(Request $request, $id_penyewa){

        $penyewa= Penyewa::find($id_penyewa);

        if(!$penyewa){
            return response()->json('Data Tidak Ditemukan');
        };

        $penyewa -> update($request->all());

        $data=[
            'message'=>'Data Berhasil Diubah',
            'data'=> $penyewa

        ];
        return response()->json($data,200);
    }

    public function delete(Request $request, $id_penyewa){

        $penyewa= Penyewa::find($id_penyewa);

        if(!$penyewa){
            return response()->json('Data Tidak Ditemukan');
        };

        $penyewa -> delete();

        $data=[
            'message'=>'Data Berhasil Dihapus',
            'data'=> $penyewa

        ];
        return response()->json($data,200);
    }

}


