<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="unik_id" id="unik_id" placeholder="Masukkan id unik">
        <button type="submit">Cari</button>
    </form>

    <?php
    include_once "class/Siswa.php";
    include_once "class/Absen.php";

    if(isset($_POST['unik_id'])){
        $siswa=new Siswa();
        if($data=$siswa->cari_siswa_by_unik_id($_POST['unik_id'])){
            echo "Nama:{$data['nama']}<br>";
            echo "NISN:{$data['nisn']}<br>";
            echo "Kelas:{$data['kelas']}";
            $absen=new Absen();
            $absen->simpan_absen($data['id']);
        }else{
            echo "<h1>Data Tidak Ditemukan</h1>";
        }
    }
    ?>
</body>
</html>