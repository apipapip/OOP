<?php

include "Yusha.php";

class Weapon extends Yusha
{
    protected $p_weapon;
    protected $p_power;

    public function get_weapon(){
        echo "$this->p_weapon";
    }
    
}