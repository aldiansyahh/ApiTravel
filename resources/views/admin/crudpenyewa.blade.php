<!-- resources/views/jadwals/index.blade.php -->
@extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/jadwals/index.blade.php -->


    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Penyewa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertPenyewa">
                <p class="btn btn-success ">Tambah +</p><br>
            </a>
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyewa as $penyewa)
                            <tr>
                                <td>{{ $penyewa->id_penyewa }}</td>
                                <td>{{ $penyewa->nik }}</td>
                                <td>{{ $penyewa->nama }}</td>
                                <td>{{ $penyewa->email }}</td>
                                <td>{{ $penyewa->no_hp }}</td>
                                <td>{{ $penyewa->alamat }}</td>
                                <td>{{ $penyewa->jenis_kelamin }}</td>
                                <td>
                                    <a href="/editPenyewa/{{ $penyewa->id_penyewa}}" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDelete({{ $penyewa->id_penyewa }})">Hapus</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
