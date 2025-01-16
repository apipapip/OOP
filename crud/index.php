<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar OOP CRUD</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <a href="view/siswa/tambah.php" class="btn btn-lg btn-success">Tambah Data</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                
                <h1>Data Siswa</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    include_once "class/Siswa.php";

    $siswa=new siswa();
    $data_all=$siswa->tampil_data_siswa_all();
    $no=1;
    foreach($data_all as $da)
    {
        echo "<tr>
        <td>$no</td>
        <td>$da[nama]</td>
        <td>$da[nisn]</td>
        <td>$da[kelas]</td>
        <td>
         <a href='controller/siswaController.php?aksi=delete&id=$da[id]' class='btn btn-sm btn-danger'>Hapus</a>
        <a href='view/siswa/edit.php?id=$da[id]' class='btn btn-sm btn-warning'>Edit</a>
        </td>
        </tr>";
        $no++;
    }
?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
<script src ="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>