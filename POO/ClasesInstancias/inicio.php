<?php
include("mascota.php");

$perro = new Mascota();
$gato = new Mascota();

$perro->color = "Dorado";
$perro->especie = "Perro";
$perro->nombre = "Sonic";
$perro->edad = 12;

$gato->color ="Gris";
$gato->especie="Gato";
$gato->nombre ="Pepe";
$gato->edad = 15;


var_dump($perro);
var_dump($gat);
