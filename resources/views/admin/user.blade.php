<!-- resources/views/jadwals/index.blade.php -->
@extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/jadwals/index.blade.php -->

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/tambahUser">
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
                            <th>Nama</th>
                            <th>Email</th>
                            {{-- <th>Password</th> --}}
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user) <!-- Perubahan di sini: $user, bukan $users -->
                            <tr>
                                <td>{{ $user->name }}</td> <!-- Perubahan di sini: $user, bukan $users -->
                                <td>{{ $user->email }}</td> <!-- Perubahan di sini: $user, bukan $users -->
                                {{-- <td>{{ $user->password }}</td> --}}
                                <td>{{ $user->role }}</td> <!-- Perubahan di sini: $user, bukan $users -->

                                <td>
                                    <a href="/editUser/{{ $user->id }}" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDeleteUser({{ $user->id }})">Hapus</a> <!-- Perubahan di sini: $user, bukan $users -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
