<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tujuan;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'lokasi_tujuan' => 'required|string',
            'urlImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you're uploading images
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Handle image upload
        $imageName = time().'.'.$request->urlImage->extension();
        $request->urlImage->move(public_path('images'), $imageName);

        // Create a new Tujuan instance
        $tujuan = new Tujuan([
            'nama' => $request->nama,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'lokasi_tujuan' => $request->lokasi_tujuan,
            'urlImage' => $imageName,
        ]);

        // Save the Tujuan instance to the database
        $tujuan->save();

        return response()->json(['message' => 'Tujuan created successfully', 'tujuan' => $tujuan], 201);
    }





}

