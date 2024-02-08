@extends('admin.masteradmin')

@section('content')
    <div class="form-group mb-3">
        <h1 class="h3 text-black-1000">Edit Data Sewa</h1>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
    @endif

    <form action="/updatesewa/{{$sewa->id_sewa}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="penyewa_id" class="form-label">ID Penyewa</label>
            <input type="text" name="penyewa_id" class="form-control" id="penyewa_id" aria-describedby="penyewaHelp" required value="{{$sewa->penyewa_id}}">
        </div>

        <div class="mb-3">
            <label for="kendaraan_id" class="form-label">ID Kendaraan</label>
            <input type="text" name="kendaraan_id" class="form-control" id="kendaraan_id" aria-describedby="kendaraanHelp" required value="{{$sewa->kendaraan_id}}">
        </div>

        <div class="mb-3">
            <label for="pelanggan_id" class="form-label">ID Pelanggan</label>
            <input type="text" name="pelanggan_id" class="form-control" id="pelanggan_id" aria-describedby="pelangganHelp" required value="{{$sewa->pelanggan_id}}">
        </div>

        <div class="mb-3">
            <label for="tujuan_id" class="form-label">ID Tujuan</label>
            <input type="text" name="tujuan_id" class="form-control" id="tujuan_id" aria-describedby="tujuanHelp" required value="{{$sewa->tujuan_id}}">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="namaHelp" required value="{{$sewa->nama}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required value="{{$sewa->email}}">
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" aria-describedby="no_hpHelp" required value="{{$sewa->no_hp}}">
        </div>

        <div class="mb-3">
            <label for="nama_kendaraan" class="form-label">Nama Kendaraan</label>
            <input type="text" name="nama_kendaraan" class="form-control" id="nama_kendaraan" aria-describedby="nama_kendaraanHelp" required value="{{$sewa->nama_kendaraan}}">
        </div>

        <div class="mb-3">
            <label for="nomor_plat" class="form-label">Nomor Plat</label>
            <input type="text" name="nomor_plat" class="form-control" id="nomor_plat" aria-describedby="nomor_platHelp" required value="{{$sewa->nomor_plat}}">
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" aria-describedby="tanggalHelp" required value="{{$sewa->tanggal}}">
        </div>

        <div class="mb-3">
            <label for="lokasi_awal" class="form-label">Lokasi Awal</label>
            <input type="text" name="lokasi_awal" class="form-control" id="lokasi_awal" aria-describedby="lokasi_awalHelp" required value="{{$sewa->lokasi_awal}}">
        </div>

        <div class="mb-3">
            <label for="lokasi_tujuan" class="form-label">Lokasi Tujuan</label>
            <input type="text" name="lokasi_tujuan" class="form-control" id="lokasi_tujuan" aria-describedby="lokasi_tujuanHelp" required value="{{$sewa->lokasi_tujuan}}">
        </div>

        <div class="mb-3">
            <label for="harga_sewa" class="form-label">Harga Sewa</label>
            <input type="text" name="harga_sewa" class="form-control" id="harga_sewa" aria-describedby="harga_sewaHelp" required value="{{$sewa->harga_sewa}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/invoice" class="btn btn-primary">Cancel</a>
    </form>
@endsection
