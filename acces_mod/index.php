<?php

class Hero
{
    private $p_nama;
    private $p_health;
    private $p_attack;

public function set_status($a_nama,$a_health,$a_attack){
    $this->p_nama=$a_nama;
    $this->p_health=$a_health;
    $this->p_attack=$a_attack;
}


// public function set_health($a_health){
//     $this->p_health=$a_health;
// }

// public function set_attack($a_attack){
//     $this->p_attack=$a_attack;
// }

public function get_status(){
    echo "$this->p_nama <br>";
    echo "$this->p_health <br>";
    echo "$this->p_attack";
}

// public function get_nama(){
//     echo "$this->p_nama";
// }
}

$hero1=new Hero();
$hero1->set_status('Zilong',100,20);
// $hero1->set_nama('zilong');
// $hero1->set_health(100);
// $hero1->set_attack(20);
$hero1->get_status();

echo "<br>";

$hero2=new Hero();
// $hero2->set_nama('Alucard');
// $hero2->set_health(100);
// $hero2->set_attack(15);
$hero2->set_status('Alucard',100,20);
$hero2->get_status();