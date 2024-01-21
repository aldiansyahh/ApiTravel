<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;

class ApiSewaController extends Controller
{
    public function sewa(){
        $sewa= Sewa::all();

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $sewa

        ];
        return response()->json($data,200);
    }

    public function show($id_sewa){
        $sewa= Sewa::find($id_sewa);

        if(!$sewa){
            return response()->json('Data Tidak Ditemukan');
        };

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $sewa

        ];
        return response()->json($data,200);
    }

//Menambahkan Data Di API
    public function create(Request $request)
    {

        $data= Sewa::create($request->all());

        return response()->json(['message' => 'Product created successfully', 'data' => $data], 201);
    }

    public function update(Request $request, $id_sewa){

        $sewa= Sewa::find($id_sewa);

        if(!$sewa){
            return response()->json('Data Tidak Ditemukan');
        };

        $sewa -> update($request->all());

        $data=[
            'message'=>'Data Berhasil Diubah',
            'data'=> $sewa

        ];
        return response()->json($data,200);
    }

    public function delete(Request $request, $id_sewa){

        $sewa= Sewa::find($id_sewa);

        if(!$sewa){
            return response()->json('Data Tidak Ditemukan');
        };

        $sewa -> delete();

        $data=[
            'message'=>'Data Berhasil Dihapus',
            'data'=> $sewa

        ];
        return response()->json($data,200);
    }
}
