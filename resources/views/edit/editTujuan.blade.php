@extends('admin.masteradmin')

@section('content')
    <div class="form-group mb-3">
        <h1 class="h3 text-black-1000">Edit Data Tujuan</h1>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>Oops!</b> {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('updatetujuan', $tujuan->id_tujuan) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Tujuan</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="namaHelp" required value="{{ $tujuan->nama }}">
        </div>

        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" id="provinsi" aria-describedby="provinsiHelp" required value="{{ $tujuan->provinsi }}">
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" class="form-control" id="kota" aria-describedby="kotaHelp" required value="{{ $tujuan->kota }}">
        </div>

        <div class="mb-3">
            <label for="lokasi_tujuan" class="form-label">Lokasi Tujuan</label>
            <input type="text" name="lokasi_tujuan" class="form-control" id="lokasi_tujuan" aria-describedby="lokasi_tujuanHelp" required value="{{ $tujuan->lokasi_tujuan }}">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="urlImage" class="form-control" id="gambar" accept="image/*" >
        </div>

        <div id="gambarHelp" class="form-text">Pilih gambar untuk diunggah. Kosongkan jika tidak ingin mengubah gambar.</div>
        </div>
<br><br>

        <div class="form-label mb-3">
            @if($tujuan->urlImage)
            <label for="gambar sekarang" class="form-label">&ensp;&ensp;Gambar Saat Ini</label>
            <img src="{{ asset('images/' . $tujuan->urlImage) }}" alt="Gambar Saat Ini" style="max-width: 200px;">
            @endif
        </div>

&ensp;
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/tujuan" type="submit" class="btn btn-primary">Cancel</a>
    </form>
@endsection
