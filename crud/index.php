<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar OOP CRUD</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <div class="row mt-5">
        <div class="col-12">
            <div class="container">
                <a href="view/siswa/tambah.php" class="btn btn-lg btn-success">Tambah Data</a>
            </div>
        </div>
    </div>
    <?php
    include_once "class/Siswa.php";

    $siswa=new siswa();
    $data_all=$siswa->tampil_data_siswa_all();

    foreach($data_all as $da)
    {
        echo "<li>$da[nama]-$da[nisn]-$da[kelas]</li>";
    }
?>
<script src ="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>