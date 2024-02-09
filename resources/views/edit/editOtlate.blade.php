@extends('admin.masteradmin')

@section('content')
    <h1 class="h3 mb-5 text-gray-800">Edit Data Otlate</h1>

    <form action="{{ route('updateotlate', $otlate->id_otlate) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="lokasi_awal" class="form-label">Lokasi Awal</label>
            <input type="text" name="lokasi_awal" class="form-control" id="lokasi_awal" value="{{ $otlate->lokasi_awal }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
