@extends('admin.masteradmin')

@section('content')
    <h1 class="h3 mb-5 text-gray-800">Tambah Penyewa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/insertpenyewa" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_user" class="form-label">ID User</label>
                    <input type="text" class="form-control" id="id_user" name="id_user" required>
                </div>
                <div class="mb-3">
                    <label for="id_otlate" class="form-label">ID Otlate</label>
                    <input type="text" class="form-control" id="id_otlate" name="id_otlate" required>
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No. HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/crudpenyewa" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
