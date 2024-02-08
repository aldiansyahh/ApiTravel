@extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Data Pelanggan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertPelanggan">
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
                            <th>ID Pelanggan</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Lokasi Awal</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $data)
                            <tr>
                                <td>{{ $data->id_pelanggan }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>{{ $data->lokasi_awal }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>
                                    <a href="/editPelanggan/{{ $data->id_pelanggan }}" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDeletePelanggan({{ $data->id_pelanggan }})">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
