<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otlate;
use Illuminate\Support\Facades\Validator;

class ApiOtlateController extends Controller
{
    public function otlate(){
        $otlate= Otlate::all();

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $otlate

        ];
        return response()->json($data,200);
    }

    public function show($id_otlate){
        $otlate= Otlate::find($id_otlate);

        if(!$otlate){
            return response()->json('Data Tidak Ditemukan');
        };

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $otlate

        ];
        return response()->json($data,200);
    }

//Menambahkan Data Di API
    public function create(Request $request)
    {

        $data= Otlate::create($request->all());

        return response()->json(['message' => 'Product created successfully', 'data' => $data], 201);
    }

    public function update(Request $request, $id_otlate){

        $otlate= Otlate::find($id_otlate);

        if(!$otlate){
            return response()->json('Data Tidak Ditemukan');
        };

        $otlate -> update($request->all());

        $data=[
            'message'=>'Data Berhasil Diubah',
            'data'=> $otlate

        ];
        return response()->json($data,200);
    }

    public function delete(Request $request, $id_otlate){

        $otlate= Otlate::find($id_otlate);

        if(!$otlate){
            return response()->json('Data Tidak Ditemukan');
        };

        $otlate -> delete();

        $data=[
            'message'=>'Data Berhasil Dihapus',
            'data'=> $otlate

        ];
        return response()->json($data,200);

    }



}


