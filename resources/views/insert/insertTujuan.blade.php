@extends('admin.masteradmin')

@section('content')
    <h1 class="h3 mb-5 text-gray-800">Tambah Data Tujuan</h1>
    <form action="{{ route('inserttujuan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_otlate" class="form-label">ID Otlate</label>
            <input type="text" name="id_otlate" class="form-control" id="id_otlate" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Tempat</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="mb-3">
            <label for="lokasi_tujuan" class="form-label">Lokasi Tujuan</label>
            <input type="text" name="lokasi_tujuan" class="form-control" id="lokasi_tujuan" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="urlImage" class="form-control" id="foto" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <input type="time" name="jam" class="form-control" id="jam" required>
        </div>
        <div class="mb-3">
            <label for="harga_sewa" class="form-label">Harga Sewa</label>
            <input type="number" name="harga_sewa" class="form-control" id="harga_sewa" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
