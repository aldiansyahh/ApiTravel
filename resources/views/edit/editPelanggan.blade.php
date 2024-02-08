@extends('admin.masteradmin')

@section('content')
    <div class="form-group mb-3">
        <h1 class="h3 text-black-1000">Edit Data Pelanggan</h1>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>Oops!</b> {{ session('error') }}
        </div>
    @endif

    <form action="/updatepelanggan/{{$pelanggan->id_pelanggan}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="number" name="nik" class="form-control" id="nik" required value="{{$pelanggan->nik}}">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required value="{{$pelanggan->nama}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required value="{{$pelanggan->email}}">
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" required value="{{$pelanggan->no_hp}}">
        </div>

        <div class="mb-3">
            <label for="lokasi_awal" class="form-label">Lokasi Awal</label>
            <input type="text" name="lokasi_awal" class="form-control" id="lokasi_awal" required value="{{$pelanggan->lokasi_awal}}">
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" id="jenis_kelamin" required>
                <option value="Laki-laki" @if($pelanggan->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                <option value="Perempuan" @if($pelanggan->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/pelanggan" class="btn btn-primary">Cancel</a>
    </form>
@endsection
