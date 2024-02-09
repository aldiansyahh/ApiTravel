@extends('admin.masteradmin')

@section('content')
    <div class="form-group mb-3">
        <h1 class="h3 text-black-1000">Edit Data Penyewa</h1>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>Oops!</b> {{ session('error') }}
        </div>
    @endif

    <form action="/updatepenyewa/{{$penyewa->id_penyewa}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_user" class="form-label">ID User</label>
            <input type="text" name="id_user" class="form-control" id="id_user" required value="{{ $penyewa->id_user }}">
        </div>

        <div class="mb-3">
            <label for="id_otlate" class="form-label">ID Otlate</label>
            <input type="text" name="id_otlate" class="form-control" id="id_otlate" required value="{{ $penyewa->id_otlate }}">
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="nik" required value="{{ $penyewa->nik }}">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required value="{{ $penyewa->nama }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required value="{{ $penyewa->email }}">
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" required value="{{ $penyewa->no_hp }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" required value="{{ $penyewa->alamat }}">
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="L" {{ $penyewa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $penyewa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/penyewa" class="btn btn-primary">Cancel</a>
    </form>
@endsection
