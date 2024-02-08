<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Penyewa</title>
  </head>
  <body>
    @extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

    @section('content')
    <div class="form-group mb-3">
        <h1 class="h3 text-black-1000">Tambah Penyewa</h1>
    </div>
                    <div class="card-body">
                        @if(session('error'))
                        <div class="alert alert-danger">
                            <b>Opps!</b> {{session('error')}}
                        </div>
                        @endif
        <form action="/insertpenyewa" method="POST" enctype="multipart/form-data">
          @csrf
{{-- <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">ID</label>
  <input type="number" name="id_penyewa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div> --}}

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Hp</label>
            <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                <option value="Laki-Laki">L</option>
                <option value="Perempuan">P</option>
            </select>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="crudpenyewa" type="submit" class="btn btn-primary">Cancel</a>
        </form>
      </div>    @endsection
    </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
