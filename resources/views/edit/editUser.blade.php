@extends('admin.masteradmin')

@section('content')
<div class="form-group mb-3">
    <h1 class="h3 text-black-1000">Edit Data User</h1>
</div>

@if(session('error'))
    <div class="alert alert-danger">
        <b>Opps!</b> {{session('error')}}
    </div>
@endif

<form action="/updateuser/{{$user->id}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{$user->name}}">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{$user->email}}">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password Baru</label>
        <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp">
        <div id="passwordHelp" class="form-text">Masukkan password baru jika ingin mengubahnya.</div>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" aria-describedby="passwordConfirmationHelp">
        <div id="passwordConfirmationHelp" class="form-text">Masukkan ulang password baru untuk konfirmasi.</div>
    </div>


    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" class="form-select" id="role" aria-describedby="roleHelp" required>
            <option value="Admin" @if($user->role == 'Admin') selected @endif>Admin</option>
            <option value="Penyewa" @if($user->role == 'Penyewa') selected @endif>Penyewa</option>
            <option value="Pelanggan" @if($user->role == 'Pelanggan') selected @endif>Pelanggan</option>
        </select>
        <div id="roleHelp" class="form-text">Pilih peran pengguna.</div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/user" type="submit" class="btn btn-primary">Cancel</a>
</form>
@endsection
