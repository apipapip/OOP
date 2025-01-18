<?php

include_once"Koneksi.php";

class Siswa extends Koneksi{
    public function tambah_data_siswa($a_nama,$a_nisn,$a_kelas,$a_unik_id){
        $query="INSERT INTO siswa SET nama='$a_nama',nisn='$a_nisn',kelas='$a_kelas',unik_id='$a_unik_id'";
        $this->p_koneksi-> query($query);
    }

    public function tampil_data_siswa_all(){
        $query="SELECT*FROM siswa";
        $hasil=$this->p_koneksi->query($query);
        $data=array();
        while ($baris=$hasil->fetch_assoc())
        {
            $data[]=$baris;
        }
        return $data;
    }

    public function hapus_data_siswa($a_id){
        $query="DELETE FROM siswa WHERE id='$a_id'";
        $this->p_koneksi->query($query);
    }

    public function cari_siswa_by_id($a_id){
        $query="SELECT * FROM siswa WHERE id='$a_id'";
        $data=$this->p_koneksi->query($query);
        return $data->fetch_assoc();
    }

    public function cari_siswa_by_unik_id($a_unik_id){
        $query="SELECT * FROM siswa WHERE unik_id='$a_unik_id'";
        $data=$this->p_koneksi->query($query);
        return $data->fetch_assoc();
    }

    public function update_data_siswa($a_nama,$a_nisn,$a_kelas,$a_id){
        $query="UPDATE siswa SET nama='$a_nama',nisn='$a_nisn',kelas='$a_kelas' WHERE id='$a_id'";
        $this->p_koneksi->query($query);
    }
}
