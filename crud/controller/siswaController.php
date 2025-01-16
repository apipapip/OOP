<?php

$aksi = $_GET['aksi'];

include "../class/Siswa.php";
$siswa=new Siswa();

if($aksi=="insert"){
    $siswa->tambah_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas']);
}

elseif($aksi=="delete"){
    $siswa->hapus_data_siswa($_GET['id']);
}
elseif($aksi=="update"){
    $siswa->update_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas'],$_POST['id']);
}
header("location:../index.php");