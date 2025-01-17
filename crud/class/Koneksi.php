<?php

class Koneksi
{
    private $p_host="localhost";
    private $p_username="root";
    private $p_password="";
    private $p_database="latihan_oop";
    protected $p_koneksi;

    public function __construct(){
        $this->p_koneksi=new mysqli
        ($this->p_host,$this->p_username,
        $this->p_password,$this->p_database);
    }
  
    public function cek_koneksi(){
        if ($this->p_koneksi){
            echo "Koneksi Berhasil";
        }
    }
}