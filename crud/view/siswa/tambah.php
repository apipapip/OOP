<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah Data</title>
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="col-12">
        <div class="container">
            <h1>Tambah Data Siswa</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="container">
            <form action='../../controller/siswaController.php?aksi=insert' method='POST'>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <form action='../../controller/siswaController.php?aksi=insert' method='POST'>
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn">
            </div>
            <form action='../../controller/siswaController.php?aksi=insert' method='POST'>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?php
?>
<script src ="../../dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>