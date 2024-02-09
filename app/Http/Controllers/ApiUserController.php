<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ApiUserController extends Controller
{
    public function registerPelanggan(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => ['required'],
                'email' => ['required', 'unique:users,email', 'email'],
                'password' => ['required', 'min:6'],
            ]);

            $data = $request->except('_token');
            $data['password'] = Hash::make($data['password']);
            $data['role'] = 'Pelanggan';

            $user = User::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Pelanggan berhasil dibuat',
                'data' => $user
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan validasi',
                'errors' => $e->validator->errors(),
            ], 400);
        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan',
                'error' => $error->getMessage(),
            ], 500);
        }
    }

    public function registerPenyewa(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => ['required'],
                'email' => ['required', 'unique:users,email', 'email'],
                'password' => ['required', 'min:6'],
            ]);

            $data = $request->except('_token');
            $data['password'] = Hash::make($data['password']);
            $data['role'] = 'Penyewa';

            $user = User::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Penyewa berhasil dibuat',
                'data' => $user
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan validasi',
                'errors' => $e->validator->errors(),
            ], 400);
        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan',
                'error' => $error->getMessage(),
            ], 500);
        }
    }

    public function show(){
        $user= User::all();

        if(!$user){
            return response()->json('Data Tidak Ditemukan');
        };

        $data=[
            'message'=>'Data Berhasil Diambil',
            'data'=> $user

        ];
        return response()->json($data,200);
    }
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('AuthToken')->plainTextToken;

                return response()->json([
                    'success' => true,
                    'user' => $user,
                    'token' => $token,
                ]);
            }

            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
                'errors' => $e->errors(),
            ], 401);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
