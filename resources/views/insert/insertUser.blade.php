@extends('admin.masteradmin')

@section('content')
<div class="form-group mb-3">
    <h1 class="h3 text-black-1000">Tambah User</h1>
</div>

<div class="card-body">
    @if(session('error'))
    <div class="alert alert-danger">
        <b>Opps!</b> {{session('error')}}
    </div>
    @endif

    <form action="/insertuser" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-select" id="role" required>
                <option value="Admin">Admin</option>
                <option value="Penyewa">Penyewa</option>
                <option value="Pelanggan">Pelanggan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/user" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
