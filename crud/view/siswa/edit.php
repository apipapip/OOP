<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include_once "../../class/Siswa.php";
    $siswa=new Siswa();
    $data=$siswa->cari_siswa_by_id($_GET['id']);
    ?>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Formulir Edit Data Siswa</h1>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12">
          <form action="../../controller/siswaController.php?aksi=update" method='POST'>
            <input type="hidden" name='id' id='id' value='<?php echo $data['id'];?>'>
            <div class="mb-3">
                <label for='nama' class='form-label'>Nama</label>
                <input type="text" class ="form-control" id="nama" name='nama' value="<?=$data['nama']?>"> 
            </div>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12">
          <form action="../../controller/siswaController.php?aksi=update" method='POST'>
            <div class="mb-3">
                <label for='nisn' class='form-label'>NISN</label>
                <input type="text" class ="form-control" id="nisn" name='nisn'value="<?=$data['nisn']?>">
            </div>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12">
          <form action="../../controller/siswaController.php?aksi=update" method='POST'>
            <div class="mb-3">
                <label for='kelas' class='form-label'>Kelas</label>
                <input type="text" class ="form-control" id="kelas" name='kelas'value="<?=$data['kelas']?>">
            </div>
            <button type="submit" class='btn btn-primary'>Simpan</button>
</form>
        </div>
    </div>
    </div>
    

    <script src="../../dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>