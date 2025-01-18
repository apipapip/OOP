<?php

$aksi = $_GET['aksi'];

include "../class/Siswa.php";
include_once "../dist/lib/phpqrcode/qrlib.php";
$siswa=new Siswa();

if($aksi=="insert"){
    $unik_id=uniqid();
    $siswa->tambah_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas'],$unik_id);
    $file="../img/" .$unik_id."png";
    QRcode::png($unik_id,$file);
}

elseif($aksi=="delete"){
    $siswa->hapus_data_siswa($_GET['id']);
}
elseif($aksi=="update"){
    $siswa->update_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas'],$_POST['id']);
}
header("location:../index.php");