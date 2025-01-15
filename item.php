<?php

class Item
{
//property
private $p_item;
private $p_attribut;
private $p_pasif;

//method
function __construct($a_item,$a_attribut,$a_pasif)
{
    $this->p_item=$a_item;
    $this->p_attribut=$a_attribut;
    $this->p_pasif=$a_pasif;
}

function __destruct()
{
    echo "Item $this->p_item berhasil di beli<br>";
}

function getItem()
{
    echo $this->p_item."<br>";
}

}
//objek
$ItemDefense=new Item('Dominace Ice','+Mana ','-regen HP enemy');

$ItemCritical=new Item('Great Dragon Spear','+Critical chance','+Movespeed when ultimate');

$ItemMagic=new Item('Genius Wand','+MP','+More Damage On weak enemy');
