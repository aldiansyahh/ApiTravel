@extends('admin.masteradmin')

@section('content')
    <div class="form-group mb-3">
        <h1 class="h3 text-black-1000">Edit Data Kendaraan</h1>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
    @endif

    <form action="/updatekendaraan/{{$kendaraan->id_kendaraan}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">ID Penyewa</label>
            <input type="text" name="id_penyewa" class="form-control" id="id_penyewa" aria-describedby="namaHelp" required value="{{$kendaraan->id_penyewa}}">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="namaHelp" required value="{{$kendaraan->nama}}">
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" name="jenis" class="form-control" id="jenis" aria-describedby="jenisHelp" required value="{{$kendaraan->jenis}}">
        </div>

        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" id="merk" aria-describedby="merkHelp" required value="{{$kendaraan->merk}}">
        </div>

        <div class="mb-3">
            <label for="tahun_produksi" class="form-label">Tahun Produksi</label>
            <input type="number" name="tahun_produksi" class="form-control" id="tahun_produksi" aria-describedby="tahun_produksiHelp" required value="{{$kendaraan->tahun_produksi}}">
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" name="warna" class="form-control" id="warna" aria-describedby="warnaHelp" required value="{{$kendaraan->warna}}">
        </div>

        <div class="mb-3">
            <label for="nomor_plat" class="form-label">Nomor Plat</label>
            <input type="text" name="nomor_plat" class="form-control" id="nomor_plat" aria-describedby="nomor_platHelp" required value="{{$kendaraan->nomor_plat}}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/invoice" class="btn btn-primary">Cancel</a>
    </form>
@endsection
