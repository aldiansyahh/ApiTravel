@extends('admin.masteradmin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Data Otlante</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertOtlate">
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
                            <th>ID Otlante</th>
                            <th>Lokasi Awal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($otlate as $data)
                            <tr>
                                <td>{{ $data->id_otlate }}</td>
                                <td>{{ $data->lokasi_awal }}</td>
                                <td>
                                    <a href="/editOtlate/{{ $data->id_otlate }}" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDeleteOtlate({{ $data->id_otlate }})">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
