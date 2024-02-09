@extends('admin.masteradmin')

@section('content')
    <h1 class="h3 mb-5 text-gray-800">Edit Data Tujuan</h1>

    <form action="{{ route('updatetujuan', $tujuan->id_tujuan) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_otlate" class="form-label">ID Otlate </label>
            <input type="text" name="id_otlate" class="form-control" id="id_otlate" required value="{{ $tujuan->id_otlate }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Tempat</label>
            <input type="text" name="nama" class="form-control" id="nama" required value="{{ $tujuan->nama }}">
        </div>
        <div class="mb-3">
            <label for="lokasi_tujuan" class="form-label">Lokasi Tujuan</label>
            <input type="text" name="lokasi_tujuan" class="form-control" id="lokasi_tujuan" required value="{{ $tujuan->lokasi_tujuan }}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label><br>
            @if($tujuan->urlImage)
                <img src="{{ asset('images/' . $tujuan->urlImage) }}" alt="Foto Tujuan" style="max-width: 200px; margin-bottom: 10px;"><br>
                <input type="checkbox" name="removeImage" id="removeImage"> <label for="removeImage">Hapus Foto</label><br>
            @endif
            <input type="file" name="urlImage" class="form-control" id="foto" accept="image/*">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ $tujuan->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" required value="{{ $tujuan->tanggal }}">
        </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <input type="time" name="jam" class="form-control" id="jam" required value="{{ $tujuan->jam }}">
        </div>
        <div class="mb-3">
            <label for="harga_sewa" class="form-label">Harga Sewa</label>
            <input type="number" name="harga_sewa" class="form-control" id="harga_sewa" required value="{{ $tujuan->harga_sewa }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
