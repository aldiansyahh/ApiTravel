@extends('admin.masteradmin')

@section('content')
<div class="form-group mb-3">
    <h1 class="h3 text-black-1000">Tambah Tujuan</h1>
</div>

<div class="card-body">
    @if(session('error'))
    <div class="alert alert-danger">
        <b>Opps!</b> {{session('error')}}
    </div>
    @endif

    <form action="/inserttujuan" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Tujuan</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>

        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" id="provinsi" required>
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" class="form-control" id="kota" required>
        </div>

        <div class="mb-3">
            <label for="lokasi_tujuan" class="form-label">Lokasi Tujuan</label>
            <input type="text" name="lokasi_tujuan" class="form-control" id="lokasi_tujuan" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="urlImage" class="form-control" id="gambar" accept="image/*" required>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="#" class="btn btn-primary">Cancel</a>
    </form>
</div>
@endsection
