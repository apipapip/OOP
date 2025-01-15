<?php

include "Character.php";

class Sniper extends Character
{
    public function get_nama(){
        echo "$this->p_nama";
    }
}