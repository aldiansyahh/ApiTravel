<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Kendaraan;
use App\Models\Otlate;
use App\Models\Pelanggan;
use App\Models\Penyewa;
use App\Models\Sewa;
use App\Models\Tujuan;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
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

    public function penyewa()
    {

        $penyewa = Penyewa::all();
            return view('admin.crudpenyewa', compact('penyewa'));

    }

    public function kendaraan()
    {

        $kendaraan = Kendaraan::all();
            return view('admin.kendaraan', compact('kendaraan'));

    }

    public function pelanggan()
    {

        $pelanggan = Pelanggan::all();
            return view('admin.pelanggan', compact('pelanggan'));

    }
    public function sewa()
    {

        $sewa = Sewa::all();
            return view('admin.invoice', compact('sewa'));

    }

    public function users()
    {

        $users = User::all();
            return view('admin.user', compact('users'));

    }
    public function tujuan()
    {

        $tujuan = Tujuan::all();
            return view('admin.tujuan', compact('tujuan'));

    }

    public function otlate()
    {

        $otlate = Otlate::all();
            return view('admin.otlate', compact('otlate'));

    }
//CRUD PENYEWA
    public function tambahpenyewa(){
        return view('insert.insertpenyewa');
    }

    public function insertpenyewa(request $request){
        Penyewa::create($request->all());
        return redirect()->route('crudpenyewa')->with('success','Data Berhasil Ditambahkan!');
    }
    public function penyewaDelete( $id ){
        $penyewa = Penyewa::find($id);
        $penyewa->delete();
        return redirect()->route('crudpenyewa')->with('success','Data Berhasil Dihapus!');
    }
    public function editpenyewa( $id ){
        $penyewa = Penyewa::find($id);
        return view('edit.editpenyewa',compact('penyewa'));
    }

    public function updatepenyewa(request $request, $id_penyewa ){
        $penyewa = Penyewa::find($id_penyewa);
        $penyewa->update($request->all());
        return redirect()->route('crudpenyewa')->with('success','Data Berhasil Diubah!');
    }

//CRUD PELANGGAN
public function tambahpelanggan(){
    return view('insert.insertpelanggan');
}

public function insertpelanggan(request $request){
    Pelanggan::create($request->all());
    return redirect()->route('pelanggan')->with('success','Data Berhasil Ditambahkan!');
}
public function pelangganDelete( $id ){
    $pelanggan = Pelanggan::find($id);
    $pelanggan->delete();
    return redirect()->route('pelanggan')->with('success','Data Berhasil Dihapus!');
}
public function editpelanggan( $id ){
    $pelanggan = Pelanggan::find($id);
    return view('edit.editpelanggan',compact('pelanggan'));
}

public function updatepelanggan(request $request, $id_pelanggan ){
    $pelanggan = Pelanggan::find($id_pelanggan);
    $pelanggan->update($request->all());
    return redirect()->route('pelanggan')->with('success','Data Berhasil Diubah!');
}



    //CRUD USER
    public function tambahuser(){
        return view('insert.insertuser');
    }

    public function insertuser(request $request){
        User::create($request->all());
        return redirect()->route('user')->with('success','Data Berhasil Ditambahkan!');
    }
    public function userDelete( $id ){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user')->with('success','Data Berhasil Dihapus!');
    }
    public function edituser( $id ){
        $user = User::find($id);
        return view('edit.edituser',compact('user'));
    }

    public function updateuser(Request $request, $id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::find($id);

        // Periksa apakah pengguna ditemukan
        if (!$user) {
            return redirect()->route('user')->with('error', 'Data Pengguna tidak ditemukan');
        }

        // Mengisi hanya bidang-bidang yang diizinkan
        $user->fill($request->only(['name', 'email', 'role']));

        // Periksa apakah input password baru diberikan
        if ($request->filled('password')) {
            // Validasi password
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Setel password baru
            $user->password = bcrypt($request->password);
        }

        // Simpan perubahan
        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('user')->with('success', 'Data Berhasil Diubah!');
    }

    //CRUD TUJUAN
    public function tambahtujuan()
    {
        return view('insert.inserttujuan');
    }

    public function inserttujuan(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'id_otlate' => 'required|exists:otlate,id_otlate',
            'nama' => 'required',
            'lokasi_tujuan' => 'required',
            'urlImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'harga_sewa' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle upload gambar
        $imageName = time() . '.' . $request->urlImage->extension();
        $request->urlImage->move(public_path('images'), $imageName);

        // Buat instance baru dari model Tujuan
        $tujuan = new Tujuan([
            'id_otlate' => $request->id_otlate,
            'nama' => $request->nama,
            'lokasi_tujuan' => $request->lokasi_tujuan,
            'urlImage' => $imageName,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'harga_sewa' => $request->harga_sewa,
        ]);

        // Simpan instance Tujuan ke database
        $tujuan->save();

        // Redirect kembali ke halaman tujuan dengan pesan sukses
        return redirect()->route('tujuan')->with('success', 'Data tujuan berhasil ditambahkan');
    }

    public function tujuanDelete($id)
    {
        $tujuan = Tujuan::find($id);
        if (!$tujuan) {
            return redirect()->route('tujuan')->with('error', 'Data Tujuan tidak ditemukan');
        }

        // Hapus gambar terkait dari direktori penyimpanan
        if ($tujuan->urlImage) {
            Storage::delete('images/' . $tujuan->urlImage);
        }

        // Hapus data Tujuan dari database
        $tujuan->delete();

        return redirect()->route('tujuan')->with('success', 'Data Berhasil Dihapus!');
    }

    public function edittujuan($id_tujuan)
    {
        $tujuan = Tujuan::find($id_tujuan);
        if (!$tujuan) {
            return redirect()->route('tujuan')->with('error', 'Data Tujuan tidak ditemukan');
        }

        return view('edit.edittujuan', compact('tujuan'));
    }

    public function updatetujuan(Request $request, $id_tujuan)
    {
        // Temukan tujuan berdasarkan ID
        $tujuan = Tujuan::find($id_tujuan);

        // Periksa apakah tujuan ditemukan
        if (!$tujuan) {
            return redirect()->route('tujuan')->with('error', 'Data Tujuan tidak ditemukan');
        }

        // Validasi input yang diterima
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'lokasi_tujuan' => 'required|string',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'harga_sewa' => 'required|numeric',
            'urlImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Diubah menjadi opsional
        ], [
            'urlImage.image' => 'Gambar harus dalam format JPEG, PNG, JPG, atau GIF',
            'urlImage.mimes' => 'Gambar harus dalam format JPEG, PNG, JPG, atau GIF',
            'urlImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update atribut-atribut yang diizinkan
        $tujuan->nama = $request->nama;
        $tujuan->lokasi_tujuan = $request->lokasi_tujuan;
        $tujuan->deskripsi = $request->deskripsi;
        $tujuan->tanggal = $request->tanggal;
        $tujuan->jam = $request->jam;
        $tujuan->harga_sewa = $request->harga_sewa;

        // Handle gambar jika diunggah
        if ($request->hasFile('urlImage')) {
            // Hapus gambar lama jika ada
            if ($tujuan->urlImage) {
                Storage::delete('public/images/' . $tujuan->urlImage);
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->urlImage->extension();
            $request->urlImage->move(public_path('images'), $imageName);
            $tujuan->urlImage = $imageName;
        }

        // Simpan perubahan
        $tujuan->save();

        // Redirect dengan pesan sukses
        return redirect()->route('tujuan')->with('success', 'Data tujuan berhasil diperbarui.');
    }


    //CRUD KENDARAAN
    public function tambahkendaraan(){
        return view('insert.insertkendaraan');
    }

    public function insertkendaraan(request $request){
        Kendaraan::create($request->all());
        return redirect()->route('kendaraan')->with('success','Data Berhasil Ditambahkan!');
    }
    public function kendaraanDelete( $id ){
        $kendaraan = Kendaraan::find($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan')->with('success','Data Berhasil Dihapus!');
    }
    public function editkendaraan( $id ){
        $kendaraan = Kendaraan::find($id);
        return view('edit.editkendaraan',compact('kendaraan'));
    }

    public function updatekendaraan(request $request, $id_kendaraan ){
        $kendaraan = Kendaraan::find($id_kendaraan);
        $kendaraan->update($request->all());
        return redirect()->route('kendaraan')->with('success','Data Berhasil Diubah!');
    }

    //CRUD OTLATE
    public function tambahotlate(){
        return view('insert.insertotlate');
    }

    public function insertotlate(request $request){
        Otlate::create($request->all());
        return redirect()->route('otlate')->with('success','Data Berhasil Ditambahkan!');
    }
    public function otlateDelete( $id ){
        $otlate = Otlate::find($id);
        $otlate->delete();
        return redirect()->route('otlate')->with('success','Data Berhasil Dihapus!');
    }
    public function editotlate( $id ){
        $otlate = Otlate::find($id);
        return view('edit.editotlate',compact('otlate'));
    }

    public function updateotlate(request $request, $id_otlate ){
        $otlate = Otlate::find($id_otlate);
        $otlate->update($request->all());
        return redirect()->route('otlate')->with('success','Data Berhasil Diubah!');
    }




    //CRUD INVOICE

    public function tambahinvoice(){
        return view('insert.insertinvoice');
    }

    public function insertinvoice(request $request){
        Sewa::create($request->all());
        return redirect()->route('invoice')->with('success','Data Berhasil Ditambahkan!');
    }
    public function invoiceDelete( $id ){
        $sewa = Sewa::find($id);
        $sewa->delete();
        return redirect()->route('invoice')->with('success','Data Berhasil Dihapus!');
    }
    public function editinvoice( $id_sewa ){
        $sewa = Sewa::find($id_sewa);
        return view('edit.editinvoice',compact('sewa'));
    }

    public function updateinvoice(request $request, $id_sewa ){
        $sewa = Sewa::find($id_sewa);
        $sewa->update($request->all());
        return redirect()->route('invoice')->with('success','Data Berhasil Diubah!');
    }



    }

