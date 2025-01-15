<?php
// final class Hero
class Hero
{
    protected $P_nama;
    protected $P_health;
    protected $P_attack;

    public function set_nama($a_nama)
    {
        $this->P_nama=$a_nama;
    }
    public function set_health($a_health=0)
    {
        $this->P_health=$a_health;
    }
    public function set_attack($a_attack=0)
    {
        $this->P_attack=$a_attack;
    }

    public function get_status()
    {
        echo "Nama hero:$this->P_nama<br>";
        echo "darah:$this->P_health<br>";
        echo "damage:$this->P_attack<br><br>";
    }
 }