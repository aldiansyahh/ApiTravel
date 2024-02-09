@extends('admin.masteradmin')

@section('content')
    <h1 class="h3 mb-5 text-gray-800">Tujuan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertTujuan">
                <button class="btn btn-success">Tambah +</button>
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
                            <th>ID Tujuan</th>
                            <th>ID Otlate</th>
                            <th>Nama Tempat</th>
                            <th>Lokasi Tujuan</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Harga Sewa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tujuan as $tujuan)
                            <tr>
                                <td>{{ $tujuan->id_tujuan }}</td>
                                <td>{{ $tujuan->id_otlate }}</td>
                                <td>{{ $tujuan->nama }}</td>
                                <td>{{ $tujuan->lokasi_tujuan }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $tujuan->urlImage) }}" alt="Foto Tujuan" style="max-width: 200px;">
                                </td>
                                <td>{{ $tujuan->deskripsi }}</td>
                                <td>{{ $tujuan->tanggal }}</td>
                                <td>{{ $tujuan->jam }}</td>
                                <td>{{ $tujuan->harga_sewa }}</td>
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
