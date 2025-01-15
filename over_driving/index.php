<?php

include "Sniper.php";

$hero1=new Hero();
$hero1->set_nama('Angela');
$hero1->set_health(70);
$hero1->set_attack(8);
$hero1->get_status();

$hero2=new Sniper();
$hero2->set_nama('Lesley');
$hero2->set_health(50);
$hero2->set_attack(7);
$hero2->get_status();