<?php

class Hero
{
private $p_nama;
private $p_health;
private $p_attack;

function __construct($a_nama,$a_health,$a_attack)
{
    $this->p_nama=$a_nama;
    $this->p_health=$a_health;
    $this->p_attack=$a_attack;
}

function menyerang_musuh($a_obj)
{
    echo "$this->p_nama menyerang $a_obj->p_nama<br>";
    $a_obj->p_health=$a_obj->p_health-$this->p_attack;    
}

function get_health()
{
    echo "HP $this->p_nama tersisa $this->p_health";
}

}
$Herosangar=new Hero('nana',70,15);
$HeroImut=new Hero('balmond',100,10);

$Herosangar->menyerang_musuh($HeroImut);
$Herosangar->menyerang_musuh($HeroImut);
$HeroImut->get_health();
