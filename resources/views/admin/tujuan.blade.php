<!-- resources/views/jadwals/index.blade.php -->
@extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/jadwals/index.blade.php -->

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Tujuan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertTujuan">
                <p class="btn btn-success">Tambah +</p><br>
            </a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Tempat</th>
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Alamat Lengkap</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tujuan as $tujuan)
                            <tr>
                                <td>{{ $tujuan->id_tujuan }}</td>
                                <td>{{ $tujuan->nama }}</td>
                                <td>{{ $tujuan->provinsi }}</td>
                                <td>{{ $tujuan->kota }}</td>
                                <td>{{ $tujuan->lokasi_tujuan }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $tujuan->urlImage) }}" alt="Foto Tujuan" style="max-width: 200px;">
                                </td>
                                <td>
                                    <a href="/editTujuan/{{ $tujuan->id_tujuan }}" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDeleteTujuan({{ $tujuan->id_tujuan }})">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
