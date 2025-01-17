<?php

include_once "Koneksi.php";

class Absen extends Koneksi
{
    public function simpan_absen($a_siswa_id){
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_saat_ini=date('Y/m/d');
        $jam_masuk=date('H:i:s');
        $query="INSERT INTO absen SET siswa_id='$a_siswa_id',jam_masuk='$jam_masuk',
                                       jam_pulang='0',tanggal='$tanggal_saat_ini',keterangan=''";
        $this->p_koneksi->query($query);
    }
}