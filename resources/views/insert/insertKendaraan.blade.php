<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Kendaraan</title>
</head>
<body>
    @extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

    @section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Tambah Kendaraan</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <form action="/insertkendaraan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="id_penyewa">ID Penyewa</label>
                        <input type="text" class="form-control" id="id_penyewa" name="id_penyewa" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama">Nama Kendaraan</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis">Jenis Kendaraan</label>
                        <input type="text" class="form-control" id="jenis" name="jenis" required>
                    </div>
                    <div class="mb-3">
                        <label for="merk">Merk Kendaraan</label>
                        <input type="text" class="form-control" id="merk" name="merk" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_produksi">Tahun Produksi</label>
                        <input type="number" class="form-control" id="tahun_produksi" name="tahun_produksi" required>
                    </div>
                    <div class="mb-3">
                        <label for="warna">Warna Kendaraan</label>
                        <input type="text" class="form-control" id="warna" name="warna" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_plat">Nomor Plat Kendaraan</label>
                        <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="number" class="form-control" id="harga_sewa" name="harga_sewa" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/invoice" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    @endsection
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
