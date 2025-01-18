<?php

include_once "../class/Siswa.php";

$siswa=new Siswa();
if($data=$siswa->cari_siswa_by_id($_GET['id'])){
    echo "{$data['nama']}<br>";
    echo '<img src="../img/'.$data['unik_id'].'.png">';
}