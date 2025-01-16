<?php

$aksi = $_GET['aksi'];

include "../class/Siswa.php";
$siswa=new Siswa();

if($aksi=="insert"){
    $siswa->tambah_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas']);
}
header("location:../index.php");