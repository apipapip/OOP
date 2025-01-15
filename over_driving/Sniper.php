<?php

include "Hero.php";

class Sniper extends Hero
{
    public function get_status()
    {
        echo "Nama hero:$this->P_nama<br>";
        echo "darah:$this->P_health<br>";
        echo "damage:$this->P_attack<br>";
        echo "Musuh terlihat";
    }
}